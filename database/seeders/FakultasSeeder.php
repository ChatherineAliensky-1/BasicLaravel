<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{

    public function run(): void
    {
        $fakultas = [
            [
                'name' => 'Fakultas Teknik',
                'dekan' => 'Prof. Dr. Ir. Ahmad Budiman, M.T.'
            ],
            [
                'name' => 'Fakultas Ekonomi dan Bisnis',
                'dekan' => 'Prof. Dr. Siti Nurjanah, S.E., M.SI.'
            ]
        ];
        Fakultas::fillAndInsert($fakultas);
    }
}
