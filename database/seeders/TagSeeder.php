<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Tag::factory()->count(5)->create();
        DB::table('tags')->insert(
            array(

                array(
                    'name' => '#Holidays',
                    'description' => 'Wakacje',
                ),

                array(
                    'name' => '#FreeTime',
                    'description' => 'Czas wolny',
                ),

            ),

        );
    }
}
