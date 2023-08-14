<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Mada Baskoro',
            'username' => 'mada.baskoro',
            'email' => 'mada.baskoro@id.panasonic.com',
            'password' => bcrypt('darkmagician'),
            'role' => 'developer',
        ]);
    }
}
