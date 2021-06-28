<?php

use App\Models\SlideEngineer;
use Illuminate\Database\Seeder;

class SlideEngineerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $engineer = new SlideEngineer();
        $engineer = [
            ['name' => 'Adam Phillips', 'avatar' => 'img/team-1.jpg', 'position' => 'CEO & Founder'],
            ['name' => 'Dylan Adams', 'avatar' => 'img/team-2.jpg', 'position' => 'Civil Engineer'],
            ['name' => 'Jhon Doe', 'avatar' => 'img/team-3.jpg', 'position' => 'Interior Designer'],
            ['name' => 'Josh Dunn', 'avatar' => 'img/team-4.jpg', 'position' => 'Painter'],
            ['name' => 'Adam Phillips', 'avatar' => 'img/team-1.jpg', 'position' => 'CEO & Founder'],
            ['name' => 'Dylan Adams', 'avatar' => 'img/team-2.jpg', 'position' => 'Civil Engineer'],
            ['name' => 'Jhon Doe', 'avatar' => 'img/team-3.jpg', 'position' => 'Interior Designer'],
            ['name' => 'Josh Dunn', 'avatar' => 'img/team-4.jpg', 'position' => 'Painter'],
        ];

        foreach ($engineer as $e) {
            SlideEngineer::create($e);
        }
    }
}
