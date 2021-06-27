<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set = new Setting;
        $set->work_time = "Mon - Fri, 8:00 - 21:00";
        $set->hotline = "+012 345 6789";
        $set->address = "123 Street, New York, USA";
        $set->email = "info@example.com";
        $set->site_name = "Builderz";
        $set->year = "25";
        $set->save();
    }
}
    // 'feature-title',
    //     'feature-icon',
    //     'feature-content',
    //     'about-title',
    //     'about-icon',
    //     'about-content',
    //     'video',
    //     'site-name',