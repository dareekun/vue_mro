<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class department extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('department_list')->insert([
            ['department' => 'Developer', 'remark' => NULL],
            ['department' => 'Common', 'remark' => NULL],
            ['department' => 'Production', 'remark' => NULL],
            ['department' => 'Quality Control', 'remark' => NULL],
            ['department' => 'Warehouse', 'remark' => NULL],
        ]);
    }
}
