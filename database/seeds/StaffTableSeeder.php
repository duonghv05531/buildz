<?php

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $engineer = new Staff;
        $engineer = [
            ['name' => 'Adam Phillips', 'avatar' => 'img/team-1.jpg', 'department' => '1', 'position' => '1', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
            ['name' => 'Dylan Adams', 'avatar' => 'img/team-2.jpg', 'department' => '2', 'position' => '2', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
            ['name' => 'Jhon Doe', 'avatar' => 'img/team-3.jpg', 'department' => '3', 'position' => '3', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
            ['name' => 'Josh Dunn', 'avatar' => 'img/team-4.jpg', 'department' => '4', 'position' => '4', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
        ];

        foreach ($engineer as $e) {
            Staff::create($e);
        }
    }
}
