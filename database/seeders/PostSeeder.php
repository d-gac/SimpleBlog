<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Post::factory()->count(5)->create();
        DB::table('posts')->insert(
            array(

                array(
                    'title' => 'Wpis testowy',
                    'slug' => 'wpis-testowy',
                    'preview_content' => 'Wpis testowy o niczym',
                    'content' => 'Wpis testowy o niczym. Niczego tutaj nie znajdziesz',
                    'active' => 1,
                    'publication_date' => '2019-09-10 11:45:42',
                    'photo' => NULL,
                    'created_by' => 1,
                    'updated_by' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),

                array(
                    'title' => 'Wpis testowy numer 2',
                    'slug' => 'wpis-testowy-numer-2',
                    'preview_content' => 'Wpis testowy numer 2 o niczym',
                    'content' => 'Wpis testowy numer 2 o niczym. Niczego tutaj nie znajdziesz',
                    'active' => 1,
                    'publication_date' => '2021-02-19 16:59:44',
                    'photo' => NULL,
                    'created_by' => 1,
                    'updated_by' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ),

            ),

        );
    }
}
