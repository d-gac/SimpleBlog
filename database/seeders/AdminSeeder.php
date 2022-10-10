<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dariusz Gac',
            'slug_name' => 'dariusz-gac',
            'email' => 'darekgac1998@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
