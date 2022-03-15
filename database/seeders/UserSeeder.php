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
            'name' => 'Admin Hima FH',
            'email' => 'lawtech@gmail.com',
            'password' => Hash::make('1234'),
            'passwordtwo' => Crypt::encryptString('1234'),
            'username' => 'admin',
            'no_tlp' => '001',
            'kelas' => '001',
            'reguler' => 'Z',
            'roles' => 'admin'
        ]);
        
    }
}
