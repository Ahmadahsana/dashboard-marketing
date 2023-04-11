<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Sales;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'nama' => 'farhan',
        //     'username' => 'farhan',
        //     'password' => bcrypt('aaaaaa'),
        //     'role_id' => '2',
        // ]);

        // User::create([
        //     'nama' => 'ahmad',
        //     'username' => 'ahmad',
        //     'password' => bcrypt('aaaaaa'),
        //     'role_id' => '1',
        // ]);

        // User::create([
        //     'nama' => 'heny',
        //     'username' => 'heny',
        //     'password' => bcrypt('aaaaaa'),
        //     'role_id' => '3',
        // ]);

        // User::create([
        //     'nama' => 'fatria',
        //     'username' => 'fatria',
        //     'password' => bcrypt('aaaaaa'),
        //     'role_id' => '1',
        // ]);

        // User::create([
        //     'nama' => 'henda',
        //     'username' => 'henda',
        //     'password' => bcrypt('aaaaaa'),
        //     'role_id' => '1',
        // ]);

        User::create([
            'nama' => 'pungky',
            'username' => 'pungky',
            'password' => bcrypt('aaaaaa'),
            'role_id' => '6',
        ]);

        User::create([
            'nama' => 'wahyu',
            'username' => 'wahyu',
            'password' => bcrypt('aaaaaa'),
            'role_id' => '6',
        ]);

        // Role::create([
        //     'nama' => 'admin'
        // ]);

        // Role::create([
        //     'nama' => 'katalog'
        // ]);

        // Role::create([
        //     'nama' => 'poi'
        // ]);

        // Role::create([
        //     'nama' => 'inquiry'
        // ]);

        // Role::create([
        //     'nama' => 'bast'
        // ]);

        // Sales::create([
        //     'nik' => '11691',
        //     'nama' => 'WAHYU'
        // ]);
        // Sales::create([
        //     'nik' => '04066',
        //     'nama' => 'SUYONO'
        // ]);
        // Sales::create([
        //     'nik' => '11111',
        //     'nama' => 'AGI'
        // ]);
        // Sales::create([
        //     'nik' => '12386',
        //     'nama' => 'WINARNO'
        // ]);
        // Sales::create([
        //     'nik' => '00011',
        //     'nama' => 'LENI'
        // ]);
        // Sales::create([
        //     'nik' => '00022',
        //     'nama' => 'PUNGKY'
        // ]);
        // Sales::create([
        //     'nik' => '00033',
        //     'nama' => 'WIDI'
        // ]);
        // Sales::create([
        //     'nik' => '00044',
        //     'nama' => 'PUTRI'
        // ]);
        // Sales::create([
        //     'nik' => '08235',
        //     'nama' => 'DEDY'
        // ]);
        // Sales::create([
        //     'nik' => '00055',
        //     'nama' => 'GIAR'
        // ]);
    }
}
