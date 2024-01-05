<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees') -> insert([
            'nama' => 'Hadid Hardiansyah',
            'jeniskelamin' => 'pria',
            'notelepon' => '081212121211'
        ]);
    }
}
