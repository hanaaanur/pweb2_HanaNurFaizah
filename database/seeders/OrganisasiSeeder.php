<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('organisasi')->insert([
            'id_organisasi'=>'O001',
            'jenis'=>'Organisasi',
            'nama'=>'OSIS',
            'periode'=>'2023',
            'ketua'=>'Agatha R.',
            'nis'=>'18209',
            'pembina'=>'Nurhidayat',
            'anggaran'=>'5000000',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('organisasi')->insert([
            'id_organisasi'=>'O002',
            'jenis'=>'Organisasi',
            'nama'=>'MPK',
            'periode'=>'2023',
            'ketua'=>'Rian A.',
            'nis'=>'18210',
            'pembina'=>'Gayatri',
            'anggaran'=>'3000000',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('organisasi')->insert([
            'id_organisasi'=>'O003',
            'jenis'=>'Ekstrakurikuler',
            'nama'=>'Pramuka',
            'periode'=>'2023',
            'ketua'=>'Bayu S.',
            'nis'=>'18230',
            'pembina'=>'Marwan',
            'anggaran'=>'4000000',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
