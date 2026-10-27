<?php

namespace Database\Seeders;

use App\Models\Periode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periode::create(['periode' => 'GANJIL 2025/2026', 'singkatan' => '251']);
Periode::create(['periode' => 'GENAP 2025/2026', 'singkatan' => '252']);
Periode::create(['periode' => 'GANJIL 2026/2027', 'singkatan' => '261']);
Periode::create(['periode' => 'GENAP 2026/2027', 'singkatan' => '262']);
    }
}
