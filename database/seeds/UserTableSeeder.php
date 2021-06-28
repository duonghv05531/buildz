<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user = [
            [
                'name' => 'Hoàng Văn Dương',
                'email' => 'vanduonghoang98@gmail.com',
                'password' => '$2y$10$oVJ04r5sapureN09Ql77oOxNNvSicJBKLvSakdk/isOqqB8YNKLl2'
            ],
            [
                'name' => 'Hoàng Anh Tú',
                'email' => 'tuha@gmail.com',
                'password' => '$2y$10$oVJ04r5sapureN09Ql77oOxNNvSicJBKLvSakdk/isOqqB8YNKLl2'
            ],

        ];
        foreach ($user as $u) {
            User::create($u);
        }
    }
}
