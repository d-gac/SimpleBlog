<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Category::factory()->count(5)->create();

        DB::table('categories')->insert(
            array(

                array(
                    'name' => 'Wpisy',
                    'description' => 'Zwykłe wpisy',
                ),

                array(
                    'name' => 'Aktualności',
                    'description' => 'Wyróżnione wpisy',
                ),

            ),

        );
    }
}
