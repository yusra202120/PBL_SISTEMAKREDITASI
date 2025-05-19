<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kriteria')->insert([
            [
                'nama_kriteria' => 'Kriteria 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kriteria' => 'Kriteria 9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
