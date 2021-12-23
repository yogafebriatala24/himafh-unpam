<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        // 'nim', 'no_tlp',
        // 'kelas', 'reguler', 'roles'
        User::create([
            'name' => 'Admin Hima FH',
            'email' => 'email@istimewah.com',
            'password' => Hash::make('admin2022'),
            'nim' => 1,
            'no_tlp' => '001',
            'kelas' => '001',
            'reguler' => 'Z',
            'roles' => 'admin'
        ]);
    }
}
