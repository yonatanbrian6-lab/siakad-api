<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1️⃣ SEMESTER
        $this->call(SemesterSeeder::class);

        // 2️⃣ USERS
        User::create([
            'name' => 'User Semester 7',
            'email' => 'user7@example.com',
            'password' => bcrypt('password'),
            'semester_id' => 1,
        ]);

        User::create([
            'name' => 'User Semester 5',
            'email' => 'user5@example.com',
            'password' => bcrypt('password'),
            'semester_id' => 2,
        ]);

        // 3️⃣ JADWAL
        $this->call(JadwalSeeder::class);
    }
}
