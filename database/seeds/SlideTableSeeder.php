<?php

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            $slide = new Slide;
            $slide->img = 'img/carousel-' . $i . '.jpg';
            $slide->content = 'We Are Professional';
            $slide->slogan = 'For Your Dream Project';
            $slide->slug = $i;
            $slide->save();
        }
    }
}
