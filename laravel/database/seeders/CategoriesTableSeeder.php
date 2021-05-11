<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'SDB',
            'user_id' => '1'
        ],[
            'name' => 'programming',
            'user_id' => '2'
        ],[
            'name' => 'English',
            'user_id' => '3'
        ]);

    }
}
