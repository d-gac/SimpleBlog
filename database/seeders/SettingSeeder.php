<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            array(

                array(
                    'contact_title' => 'Kontakt!',
                    'contact_content' => 'Kontakt! - treść',
                    'about_title' => 'O nas!',
                    'about_content' => 'O nas! - treść',
                ),

            ),

        );
    }
}
