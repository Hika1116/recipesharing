<?php

use Illuminate\Database\Seeder;

class CategoryControlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorycontrol')->insert([
            ['recipe_id'=> '1','category_id' => 1,],
            ['recipe_id'=> '1','category_id' => 2,],
            ['recipe_id' => '2', 'category_id' => 3,],
            ['recipe_id' => '2', 'category_id' => 4,],
            ['recipe_id' => '3', 'category_id' => 2,],
            ['recipe_id' => '3', 'category_id' => 3,],
            ['recipe_id' => '4', 'category_id' => 1,],
        ]);
    }
}
