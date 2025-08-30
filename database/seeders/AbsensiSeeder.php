<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AbsensiGuru;
use App\Models\AbsensiSiswa;
use App\Models\Guru;
use App\Models\Siswa;

class AbsensiSeeder extends Seeder
{
    public function run(): void
    {
        // Get existing guru and siswa
        $guru = Guru::all();
        $siswa = Siswa::all();

        if ($guru->count() > 0) {
            // Create absensi guru for today
            foreach ($guru as $g) {
                AbsensiGuru::create([
                    'guru_id' => $g->id,
                    'tanggal' => now()->format('Y-m-d'),
                    'kehadiran' => 'hadir',
                    'jenjang' => $g->jenjang,
                ]);
            }
        }

        if ($siswa->count() > 0) {
            // Create absensi siswa for today
            foreach ($siswa as $s) {
                AbsensiSiswa::create([
                    'siswa_id' => $s->id,
                    'tanggal' => now()->format('Y-m-d'),
                    'kehadiran' => 'hadir',
                    'jenjang' => $s->jenjang,
                ]);
            }
        }

        $this->command->info('Attendance data has been seeded successfully!');
    }
} 