<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{

    public function run(): void
    {
        $prodis = [
            [
                'nama_prodi' => 'Pendidikan Dokter',
                'nama_kaprodi' => 'dr. Andi Kusuma, Sp.B., M.Kes.'
            ],
            [
                'nama_prodi' => 'Informatika',
                'nama_kaprodi' => 'dr. Eko Prasetyo, Sp.Kom., M.Cs.'
            ]
        ];

        foreach ($prodis as $prodi) {
            // 1. Ambil ID Fakultas secara acak
            $fakultasId = Fakultas::inRandomOrder()->first()->id;

            // 2. Masukkan ID tersebut ke dalam array $prodi dengan key 'fakultas_id'
            $prodi['fakultas_id'] = $fakultasId;

            // 3. Masukkan seluruh array $prodi ke dalam method create
            Prodi::create($prodi); 
        }
       
    }
}
