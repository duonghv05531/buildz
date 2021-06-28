<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role;
        $role = [
            ['name' => 'admin', 'display_name' => 'Admin'],
            ['name' => 'staff', 'display_name' => 'Staff'],
            ['name' => 'customer', 'display_name' => 'Customer'],
        ];
        foreach ($role as $r) {
            Role::create($r);
        }
    }
}
