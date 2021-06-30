<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'nama' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'nip' => '123',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'banjarbaru',
            'tanggal_lahir' => '1997-05-05',
            'alamat' => 'banjarbaru',
            'role' => '1',
        ]);
    }
}
