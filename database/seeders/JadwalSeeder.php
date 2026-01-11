<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Sertifikasi Profesi
        Jadwal::create([
            'user_id' => 1,
            'semester_id' => 1,
            'nama_mk' => 'SERTIFIKASI PROFESI',
            'ruang' => 'LAB. APLIKASI 1',
            'hari' => 'SELASA',
            'jam_mulai' => '09:30',
            'jam_selesai' => '12:00',
            'dosen' => 'Syahminan, M.Kom.'
        ]);

        // 2. Arsitektur dan Perancangan Sistem Enterprise
        Jadwal::create([
            'user_id' => 1,
            'semester_id' => 1,
            'nama_mk' => 'ARSITEKTUR DAN PERANCANGAN SISTEM ENTERPRISE',
            'ruang' => 'J-17',
            'hari' => 'SELASA',
            'jam_mulai' => '07:00',
            'jam_selesai' => '09:30',
            'dosen' => 'Dr. Rini Agustina, S.Kom., M.Pd.'
        ]);

        // 3. Apps Developer
        Jadwal::create([
            'user_id' => 1,
            'semester_id' => 1,
            'nama_mk' => 'APPS DEVELOPPER',
             'ruang' => 'LAB. INTERNET',
            'hari' => 'KAMIS',
            'jam_mulai' => '09:30',
            'jam_selesai' => '12:00',
            'dosen' => 'Hari Lugis Purwanto, S.Kom., M.Cs.'
        ]);

        // 4. Skripsi / Tugas Akhir
        Jadwal::create([
            'user_id' => 1,
            'semester_id' => 1,
            'nama_mk' => 'SKRIPSI / TUGAS AKHIR',
            'ruang' => 'J-18',
            'hari' => 'SENIN',
            'jam_mulai' => '07:50',
            'jam_selesai' => '10:20',
            'dosen' => 'Tim Skripsi'
        ]);

        // 5. Kuliah Kerja Nyata
        Jadwal::create([
            'user_id' => 1,
            'semester_id' => 1,
            'nama_mk' => 'KULIAH KERJA NYATA',
            'ruang' => 'J-18',
            'hari' => 'SENIN',
            'jam_mulai' => '12:50',
            'jam_selesai' => '16:10',
            'dosen' => 'Wikan Prabowo'
        ]);
        Jadwal::create([
    'user_id' => 2,
    'semester_id' => 1,
    'nama_mk' => 'METODOLOGI PENELITIAN PUBLIKASI',
    'ruang' => 'J-18',
    'hari' => 'SELASA',
    'jam_mulai' => '09:30',
    'jam_selesai' => '12:00',
    'dosen' => 'Dr. Rini Agustina, S.Kom., M.Pd.'
]);

Jadwal::create([
    'user_id' => 2,
    'semester_id' => 1,
    'nama_mk' => 'PEMROGRAMAN WEB II',
    'ruang' => 'LAB INTERNET',
    'hari' => 'SELASA',
    'jam_mulai' => '07:00',
    'jam_selesai' => '09:30',
    'dosen' => 'Hari Lugis Purwanto, S.Kom., M.Cs.'
]);

Jadwal::create([
    'user_id' => 2,
    'semester_id' => 1,
    'nama_mk' => 'DSS & DATA MINING',
    'ruang' => 'J-18',
    'hari' => 'KAMIS',
    'jam_mulai' => '09:30',
    'jam_selesai' => '12:00',
    'dosen' => 'Wiji Setiyaningsih, S.Kom., M.Kom.'
]);

Jadwal::create([
    'user_id' => 2,
    'semester_id' => 1,
    'nama_mk' => 'INTERNET OF THINGS',
    'ruang' => 'J-17',
    'hari' => 'KAMIS',
    'jam_mulai' => '12:50',
    'jam_selesai' => '15:20',
    'dosen' => 'Syahminan, M.Kom.'
]);

Jadwal::create([
    'user_id' => 2,
    'semester_id' => 1,
    'nama_mk' => 'SOCKET PROGRAMMING',
    'ruang' => 'J-18',
    'hari' => 'KAMIS',
    'jam_mulai' => '07:00',
    'jam_selesai' => '09:30',
    'dosen' => 'Syahminan, M.Kom.'
]);

    }
}
