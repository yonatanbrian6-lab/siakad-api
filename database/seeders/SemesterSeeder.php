<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semester;

class SemesterSeeder extends Seeder
{
    public function run(): void
    {
        Semester::create([
            'nama' => 'Semester 7',
            'aktif' => true
        ]);

        Semester::create([
            'nama' => 'Semester 5',
            'aktif' => true
        ]);
    }
}
