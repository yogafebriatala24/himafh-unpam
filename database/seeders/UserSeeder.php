<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'name',
        // 'email',
        // 'password',
        // 'username', 'no_tlp',
        // 'kelas', 'reguler', 'roles'
        $faker = Faker::create('id_ID');
        User::create([
            'name' => 'Admin Hima FH',
            'email' => 'email@istimewah.com',
            'password' => Hash::make('admin2022'),
            'passwordtwo' => Crypt::encryptString('admin2022'),
            'username' => 1,
            'no_tlp' => '001',
            'kelas' => '001',
            'reguler' => 'Z',
            'roles' => 'admin'
        ]);
        User::create([
            'name' => 'Admin Dua Hima FH',
            'email' => 'email@istimewah2.com',
            'username' => 1,
            'no_tlp' => '001',
            'kelas' => '001',
            'reguler' => 'Z',
            'roles' => 'admin'
        ]);
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('admin2022'),
                'passwordtwo' => Crypt::encryptString('admin2022'),
                'username' => rand(10000000, 100000000),
                'no_tlp' => $faker->phoneNumber,
                'kelas' => 'TPLA' . $i,
                'reguler' => 'A',
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('admin2022'),
                'passwordtwo' => Crypt::encryptString('admin2022'),
                'username' =>
                rand(10000000, 100000000),
                'no_tlp' => $faker->phoneNumber,
                'kelas' => 'TPLB' . $i,
                'reguler' => 'B',
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('admin2022'),
                'passwordtwo' => Crypt::encryptString('admin2022'),
                'username' =>
                rand(10000000, 100000000),
                'no_tlp' => $faker->phoneNumber,
                'kelas' => 'TPLC' . $i,
                'reguler' => 'C',
            ]);
        }
    }
}
