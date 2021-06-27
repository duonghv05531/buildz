<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(EngineerTableSeeder::class);
        $this->call(AskTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SlideCustomerTableSeeder::class);
        $this->call(SlideEngineerTableSeeder::class);
    }
}
