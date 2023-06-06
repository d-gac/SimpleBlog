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
        DB::table('users')->insert(
            array(
                array(
                    'name' => 'Dariusz Gac',
                    'slug_name' => 'dariusz-gac',
                    'email' => 'administrator@simple-blog.com',
                    'password' => Hash::make('12345678'),
                ),
                array(
                    'name' => 'Redaktor',
                    'slug_name' => 'redaktor',
                    'email' => 'redaktor@simple-blog.com',
                    'password' => Hash::make('12345678'),
                ),
            )
        );
    }
}
