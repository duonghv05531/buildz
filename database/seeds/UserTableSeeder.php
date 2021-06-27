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
        $user->name = 'Hoàng Văn Dương';
        $user->email = 'vanduonghoang98@gmail.com';
        $user->password = '$2y$10$oVJ04r5sapureN09Ql77oOxNNvSicJBKLvSakdk/isOqqB8YNKLl2';
        $user->save();
    }
}
