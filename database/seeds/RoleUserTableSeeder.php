<?php

use App\RoleUser;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleuser = new RoleUser();
        $roleuser = [
            ['user_id' => '1', 'role_id' => '1'],
            ['user_id' => '1', 'role_id' => '2'],
            ['user_id' => '1', 'role_id' => '3'],
            ['user_id' => '2', 'role_id' => '2'],
            ['user_id' => '2', 'role_id' => '3'],
        ];
        foreach ($roleuser as $r) {
            RoleUser::create($r);
        }
    }
}
