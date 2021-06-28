<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission = [
            ['name' => 'home', 'display_name' => 'Home Page'],
            ['name' => 'setting', 'display_name' => 'Web settings'],
            ['name' => 'service', 'display_name' => 'Service'],
            ['name' => 'staff', 'display_name' => 'Staff'],
            ['name' => 'slide', 'display_name' => 'Slide'],
            ['name' => 'slidee', 'display_name' => 'Slidee'],
            ['name' => 'department', 'display_name' => 'Department'],
            ['name' => 'position', 'display_name' => 'Position'],
            ['name' => 'salary', 'display_name' => 'Salary'],
            ['name' => 'user', 'display_name' => 'User'],
        ];
        foreach ($permission as $r) {
            Permission::create($r);
        }
    }
}
