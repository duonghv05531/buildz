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
        $this->call(StaffTableSeeder::class);
        $this->call(AskTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SlideCustomerTableSeeder::class);
        $this->call(SlideEngineerTableSeeder::class);
        $this->call(SalaryTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
    }
}
