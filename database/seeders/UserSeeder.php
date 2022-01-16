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
        User::create([
            'name' => 'Admin Hima FH 4',
            'email' => 'lawtech42022@gmail.com',
            'password' => Hash::make('*Adminnnn4.20222023*'),
            'passwordtwo' => Crypt::encryptString('*Adminnnn4.20222023*'),
            'username' => 'adminpemira4222022',
            'no_tlp' => '001',
            'kelas' => '001',
            'reguler' => 'Z',
            'roles' => 'admin'
        ]);
        
    }
}
