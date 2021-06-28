<?php

use App\Models\Category;
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
        $cate = new Category;
        $cate = [
            ['name' => 'National'],
            ['name' => 'International'],
            ['name' => 'Economics'],
            ['name' => 'Polities'],
            ['name' => 'lifestyle'],
            ['name' => 'Technology'],
            ['name' => 'Trades']
        ];
        foreach ($cate as $c) {
            Category::create($c);
        }
    }
}
