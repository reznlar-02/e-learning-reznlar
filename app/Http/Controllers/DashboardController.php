<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\ELearning;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Nilai;
use App\Models\Raport;
use App\Models\AbsensiGuru;
use App\Models\AbsensiSiswa;
use App\Models\Jenjang;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $user_role = $user->role;

        // Redirect to role-specific dashboard
        switch (strtolower($user_role)) {
            case 'admin':
            case 'super admin':
                return $this->adminDashboard($user, $user_role);
            case 'guru':
                return $this->guruDashboard($user, $user_role);
            case 'murid':
                return $this->siswaDashboard($user, $user_role);
            case 'kepala sekolah':
                return $this->kepalaSekolahDashboard($user, $user_role);
            case 'orang tua':
                return $this->ortuDashboard($user, $user_role);
            case 'guest':
                return $this->guestDashboard($user, $user_role);
            default:
                return $this->guestDashboard($user, $user_role);
        }
    }

    private function adminDashboard($user, $user_role)
    {
        // Get comprehensive statistics for admin
        $stats = [
            'total_users' => User::count(),
            'total_guru' => Guru::count(),
            'total_siswa' => Siswa::count(),
            'total_jenjang' => Jenjang::count(),
            'total_jurusan' => Jurusan::count(),
            'total_kelas' => Kelas::count(),
            'total_mapel' => MataPelajaran::count(),
        ];

        // Get recent data for tables
        $recent_data = [
            'users' => User::latest()->take(5)->get(),
            'guru' => Guru::latest()->take(5)->get(),
            'siswa' => Siswa::latest()->take(5)->get(),
        ];

        // Get attendance statistics
        $attendance_stats = [
            'guru_attendance' => AbsensiGuru::where('kehadiran', 'hadir')->count(),
            'siswa_attendance' => AbsensiSiswa::where('kehadiran', 'hadir')->count(),
            'total_guru_attendance' => AbsensiGuru::count(),
            'total_siswa_attendance' => AbsensiSiswa::count(),
        ];

        // Calculate percentages
        if ($attendance_stats['total_guru_attendance'] > 0) {
            $attendance_stats['guru_attendance_percentage'] = round(($attendance_stats['guru_attendance'] / $attendance_stats['total_guru_attendance']) * 100, 1);
        } else {
            $attendance_stats['guru_attendance_percentage'] = 0;
        }

        if ($attendance_stats['total_siswa_attendance'] > 0) {
            $attendance_stats['siswa_attendance_percentage'] = round(($attendance_stats['siswa_attendance'] / $attendance_stats['total_siswa_attendance']) * 100, 1);
        } else {
            $attendance_stats['siswa_attendance_percentage'] = 0;
        }

        // Get role-based statistics
        $role_stats = [
            'admin_count' => User::where('role', 'Admin')->count(),
            'super_admin_count' => User::where('role', 'Super Admin')->count(),
            'guru_count' => User::where('role', 'Guru')->count(),
            'siswa_count' => User::where('role', 'Murid')->count(),
            'kepala_sekolah_count' => User::where('role', 'Kepala Sekolah')->count(),
            'ortu_count' => User::where('role', 'Orang Tua')->count(),
            'guest_count' => User::where('role', 'Guest')->count(),
        ];

        return view('backend.dashboards.admin')->with(compact(
            'user_role',
            'stats',
            'recent_data',
            'attendance_stats',
            'role_stats',
            'user'
        ));
    }

    private function guruDashboard($user, $user_role)
    {
        // Get guru-specific data
        $guru = Guru::where('nama', 'LIKE', '%' . $user->name . '%')->first();
        
        $stats = [
            'total_siswa' => Siswa::count(),
            'total_mapel' => MataPelajaran::count(),
            'total_kelas' => Kelas::count(),
        ];

        // Get recent data for guru
        $recent_data = [
            'siswa' => Siswa::latest()->take(5)->get(),
            'mapel' => MataPelajaran::latest()->take(5)->get(),
        ];

        return view('backend.dashboards.guru')->with(compact(
            'user_role',
            'stats',
            'recent_data',
            'user',
            'guru'
        ));
    }

    private function siswaDashboard($user, $user_role)
    {
        // Get siswa-specific data
        $siswa = Siswa::where('nama', 'LIKE', '%' . $user->name . '%')->first();
        
        $stats = [
            'total_mapel' => MataPelajaran::count(),
            'total_kelas' => Kelas::count(),
        ];

        // Get recent data for siswa
        $recent_data = [
            'mapel' => MataPelajaran::latest()->take(5)->get(),
        ];

        return view('backend.dashboards.siswa')->with(compact(
            'user_role',
            'stats',
            'recent_data',
            'user',
            'siswa'
        ));
    }

    private function kepalaSekolahDashboard($user, $user_role)
    {
        // Get kepala sekolah-specific data
        $stats = [
            'total_guru' => Guru::count(),
            'total_siswa' => Siswa::count(),
            'total_kelas' => Kelas::count(),
            'total_mapel' => MataPelajaran::count(),
        ];

        // Get attendance statistics
        $attendance_stats = [
            'guru_attendance' => AbsensiGuru::whereDate('created_at', today())->where('status', 'Hadir')->count(),
            'total_guru_attendance' => AbsensiGuru::whereDate('created_at', today())->count(),
            'siswa_attendance' => AbsensiSiswa::whereDate('created_at', today())->where('status', 'Hadir')->count(),
            'total_siswa_attendance' => AbsensiSiswa::whereDate('created_at', today())->count(),
        ];

        // Calculate percentages
        $attendance_stats['guru_attendance_percentage'] = $attendance_stats['total_guru_attendance'] > 0 
            ? round(($attendance_stats['guru_attendance'] / $attendance_stats['total_guru_attendance']) * 100) 
            : 0;
        $attendance_stats['siswa_attendance_percentage'] = $attendance_stats['total_siswa_attendance'] > 0 
            ? round(($attendance_stats['siswa_attendance'] / $attendance_stats['total_siswa_attendance']) * 100) 
            : 0;

        // Get recent data for kepala sekolah
        $recent_data = [
            'users' => User::latest()->take(5)->get(),
            'guru' => Guru::latest()->take(5)->get(),
            'siswa' => Siswa::latest()->take(5)->get(),
        ];

        return view('backend.dashboards.kepala_sekolah')->with(compact(
            'user_role',
            'stats',
            'attendance_stats',
            'recent_data',
            'user'
        ));
    }

    private function ortuDashboard($user, $user_role)
    {
        // Get orang tua-specific data
        $stats = [
            'total_siswa' => Siswa::count(),
            'total_kelas' => Kelas::count(),
        ];

        return view('backend.dashboards.ortu')->with(compact(
            'user_role',
            'stats',
            'user'
        ));
    }

    private function guestDashboard($user, $user_role)
    {
        // Get guest-specific data
        $stats = [
            'total_jenjang' => Jenjang::count(),
            'total_jurusan' => Jurusan::count(),
        ];

        return view('backend.dashboards.guest')->with(compact(
            'user_role',
            'stats',
            'user'
        ));
    }
}
