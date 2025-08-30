<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jenjang;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Guru;
use App\Models\Siswa;

class SimpleDataSeeder extends Seeder
{
    public function run(): void
    {
        // Create Jenjang
        $jenjang = [
            ['nama' => 'SD (Sekolah Dasar)'],
            ['nama' => 'SMP (Sekolah Menengah Pertama)'],
            ['nama' => 'SMA (Sekolah Menengah Atas)'],
            ['nama' => 'SMK (Sekolah Menengah Kejuruan)'],
        ];

        foreach ($jenjang as $j) {
            Jenjang::create($j);
        }

        // Create Jurusan
        $jurusan = [
            ['nama' => 'IPA (Ilmu Pengetahuan Alam)'],
            ['nama' => 'IPS (Ilmu Pengetahuan Sosial)'],
            ['nama' => 'Bahasa'],
            ['nama' => 'Teknik Komputer dan Jaringan'],
            ['nama' => 'Multimedia'],
            ['nama' => 'Akuntansi'],
        ];

        foreach ($jurusan as $j) {
            Jurusan::create($j);
        }

        // Create Kelas (using actual table structure)
        $kelas = [
            ['nama' => 'Kelas 7A', 'tingkat' => 7, 'jenjang' => 'SMP'],
            ['nama' => 'Kelas 7B', 'tingkat' => 7, 'jenjang' => 'SMP'],
            ['nama' => 'Kelas 8A', 'tingkat' => 8, 'jenjang' => 'SMP'],
            ['nama' => 'Kelas 8B', 'tingkat' => 8, 'jenjang' => 'SMP'],
            ['nama' => 'Kelas 9A', 'tingkat' => 9, 'jenjang' => 'SMP'],
            ['nama' => 'Kelas 9B', 'tingkat' => 9, 'jenjang' => 'SMP'],
            ['nama' => 'Kelas 10 IPA 1', 'tingkat' => 10, 'jenjang' => 'SMA'],
            ['nama' => 'Kelas 10 IPS 1', 'tingkat' => 10, 'jenjang' => 'SMA'],
            ['nama' => 'Kelas 11 IPA 1', 'tingkat' => 11, 'jenjang' => 'SMA'],
            ['nama' => 'Kelas 11 IPS 1', 'tingkat' => 11, 'jenjang' => 'SMA'],
            ['nama' => 'Kelas 12 IPA 1', 'tingkat' => 12, 'jenjang' => 'SMA'],
            ['nama' => 'Kelas 12 IPS 1', 'tingkat' => 12, 'jenjang' => 'SMA'],
        ];

        foreach ($kelas as $k) {
            Kelas::create($k);
        }

        // Create Mata Pelajaran
        $mapel = [
            ['nama' => 'Matematika'],
            ['nama' => 'Bahasa Indonesia'],
            ['nama' => 'Bahasa Inggris'],
            ['nama' => 'IPA'],
            ['nama' => 'IPS'],
            ['nama' => 'Pendidikan Agama'],
            ['nama' => 'PPKN'],
            ['nama' => 'Seni Budaya'],
            ['nama' => 'Penjaskes'],
            ['nama' => 'Informatika'],
        ];

        foreach ($mapel as $m) {
            MataPelajaran::create($m);
        }

        // Create Guru (using actual table structure)
        $guru = [
            [
                'nama' => 'Ahmad Suryadi, S.Pd',
                'mata_pelajaran' => 'Matematika',
                'jenjang' => 'SMP',
            ],
            [
                'nama' => 'Siti Nurhaliza, S.Pd',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'jenjang' => 'SMP',
            ],
            [
                'nama' => 'Budi Santoso, S.Pd',
                'mata_pelajaran' => 'Bahasa Inggris',
                'jenjang' => 'SMP',
            ],
            [
                'nama' => 'Dewi Sartika, S.Pd',
                'mata_pelajaran' => 'IPA',
                'jenjang' => 'SMA',
            ],
            [
                'nama' => 'Rizki Pratama, S.Pd',
                'mata_pelajaran' => 'IPS',
                'jenjang' => 'SMA',
            ],
        ];

        foreach ($guru as $g) {
            Guru::create($g);
        }

        // Create Siswa (using actual table structure)
        $siswa = [
            [
                'nama' => 'Dewi Sartika',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2008-03-15',
                'alamat' => 'Jl. Gatot Subroto No. 111, Jakarta',
                'jenjang' => 'SMA',
            ],
            [
                'nama' => 'Rizki Pratama',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-07-22',
                'alamat' => 'Jl. Asia Afrika No. 222, Bandung',
                'jenjang' => 'SMA',
            ],
            [
                'nama' => 'Putri Wulandari',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2008-11-08',
                'alamat' => 'Jl. Tunjungan No. 333, Surabaya',
                'jenjang' => 'SMA',
            ],
            [
                'nama' => 'Ahmad Fadillah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-05-12',
                'alamat' => 'Jl. Pandanaran No. 444, Semarang',
                'jenjang' => 'SMA',
            ],
            [
                'nama' => 'Siti Aminah',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2007-09-18',
                'alamat' => 'Jl. Pahlawan No. 555, Malang',
                'jenjang' => 'SMP',
            ],
        ];

        foreach ($siswa as $s) {
            Siswa::create($s);
        }

        $this->command->info('Simple academic data has been seeded successfully!');
    }
} 