<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([[
        	'name' => 'aries',
            'email' => 'aries.pirnando@gmail.com',
            'role' => 'operator',
            'password'=> Hash::make('1234'),
            'status' => 'A'
        ],[
            'name' => 'aini',
            'email' => 'ainirahmayati12@gmail.com',
            'role' => 'guru',
            'password'=> Hash::make('1234'),
            'status' => 'A'
        ],[
            'name' => 'mola',
            'email' => 'mola@gmail.com',
            'role' => 'siswa',
            'password'=> Hash::make('1234'),
            'status' => 'A'
        ]]
        );

        DB::table('configs')->insert([[
        	'kode_config' => 'QR_TIMEOUT',
            'keterangan' => '60',
            'status' => 'A'
        ],[
            'name' => 'QR_LOCATION',
            'keterangan' => '-6.37095462836588|106.71736190014911',
            'status' => 'A'
        ],[
            'name' => 'QR_RADIUS',
            'keterangan' => '300',
            'status' => 'A'
        ]]
        );
    }
}
