<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert(
            array(

                array(
                    'is_visible_webTitle' => 1,
                    'webTitle' => 'Simple Blog',
                    'banner_title' => 'Tytuł w banerze',
                    'banner_paragraph' => 'Treść w banerze',
                    'banner_photo' => null,
                    'is_visible_about' => 1,
                    'is_visible_contact' => 1,
                ),

            ),

        );
    }
}
