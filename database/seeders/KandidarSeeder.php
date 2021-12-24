<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use App\Models\Paslon;
use Illuminate\Database\Seeder;

class KandidarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paslon::create([
            'nomor' => 01,
            'visi' => 'Progresif, inovatif dan beritegritas',
            'misi' => 'Menajalankan amanah aja',
        ]);
        Paslon::create([
            'nomor' => 02,
            'visi' => 'Visi 02 Progresif, inovatif dan beritegritas',
            'misi' => 'Misi 02 Menajalankan amanah aja',
        ]);
        Kandidat::create([
            'user_id' => 6,
            'image' => 'not image',
            'role' => 'Ketua',
            'paslon_id' => 1
        ]);
        Kandidat::create([
            'user_id' => 10,
            'image' => 'not image',
            'role' => 'Wakil',
            'paslon_id' => 1
        ]);
        Kandidat::create([
            'user_id' => 8,
            'image' => 'not image',
            'role' => 'Ketua',
            'paslon_id' => 2
        ]);
        Kandidat::create([
            'user_id' => 12,
            'image' => 'not image',
            'role' => 'Wakil',
            'paslon_id' => 2
        ]);
    }
}
