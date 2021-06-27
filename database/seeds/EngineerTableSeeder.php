<?php

use App\Models\Engineer;
use Illuminate\Database\Seeder;

class EngineerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $engineer = new Engineer;
        $engineer = [
            ['name' => 'Adam Phillips', 'avatar' => 'img/team-1.jpg', 'department' => 'Economic', 'position' => 'CEO & Founder', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
            ['name' => 'Dylan Adams', 'avatar' => 'img/team-2.jpg', 'department' => 'Economic', 'position' => 'Civil Engineer', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
            ['name' => 'Jhon Doe', 'avatar' => 'img/team-3.jpg', 'department' => 'Economic', 'position' => 'Interior Designer', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
            ['name' => 'Josh Dunn', 'avatar' => 'img/team-4.jpg', 'department' => 'Economic', 'position' => 'Painter', 'age' => '45', 'address' => 'VietNam', 'phone' => '0972235642', 'bank_number' => '123123123', 'email' => 'vanduonghoang98@gmail.com'],
        ];

        foreach ($engineer as $e) {
            Engineer::create($e);
        }
    }
}
//         'name',
//         'avatar',
//         'department'
//         'position',
//         'age',
//         'address',
//         'phone',
//         'bank_number',
//         'email'