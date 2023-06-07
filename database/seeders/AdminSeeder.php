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
                    'email' => 'dariusz-gac@simple-blog.com',
                    'password' => Hash::make('+wCZ@Z<NGB*RN$AeKqdF'),
                ),
                array(
                    'name' => 'Administrator',
                    'slug_name' => 'administrator',
                    'email' => 'administrator@simple-blog.com',
                    'password' => Hash::make('D+3wU?Tr7/7Rm)XM@/Cx'),
                ),
                array(
                    'name' => 'Redaktor',
                    'slug_name' => 'redaktor',
                    'email' => 'redaktor@simple-blog.com',
                    'password' => Hash::make('\%#$vaJrL@KV*a3rx-P$'),
                ),
            )
        );
    }
}
