<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            ['category_name'=>'朝食',],
            ['category_name' => '昼食',],
            ['category_name' => '夕食',],
        ]);
    }
}
