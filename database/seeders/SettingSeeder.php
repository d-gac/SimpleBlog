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
                    'is_visible_twitter' => 0,
                    'is_visible_facebook' => 0,
                    'is_visible_github' => 1,
                    'is_visible_linkedin' => 1,
                    'is_visible_youtube' => 0,
                    'twitter' => '',
                    'facebook' => '',
                    'github' => 'https://github.com/d-gac/',
                    'linkedin' => 'https://www.linkedin.com/in/dariusz-gac-118661240?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAADvltWQBjmbCWUsaXOrdnMrqd1JC8R5O1aI&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_people%3BLvERv6akQsyNWysozRalUA%3D%3D',
                    'youtube' => '',
                ),

            ),

        );
    }
}
