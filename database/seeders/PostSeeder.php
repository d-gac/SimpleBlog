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
                    'preview_content' => 'Wpis testowy. Można go edytować oraz usunąć.',
                    'content' => 'Wpis testowy pozwalajacy na zapoznanie się z podstawowymi mechanizmami aplikacji.',
                    'active' => 1,
                    'publication_date' => '2023-06-06 12:00:00',
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
