<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new Department();

        $department = [
            ['name' => 'Economic'],
            ['name' => 'Office'],
            ['name' => 'Human resouces'],
            ['name' => 'Deployment'],
        ];
        foreach ($department as $d) {
            Department::create($d);
        }
    }
}
