<?php

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position = new Position;
        $position = [
            ['name' => 'Manager', 'department_id' => '1'],
            ['name' => 'Chief accountant', 'department_id' => '2'],
            ['name' => 'Head of Recruitment', 'department_id' => '3'],
            ['name' => 'Chief engineer', 'department_id' => '4'],
            ['name' => 'Deputy', 'department_id' => '1'],
            ['name' => 'Business man', 'department_id' => '1'],
            ['name' => 'Clerk', 'department_id' => '2'],
            ['name' => 'Recruitment Staff', 'department_id' => '3'],
            ['name' => 'Engineer', 'department_id' => '4'],
            ['name' => 'Worker', 'department_id' => '4'],
        ];
        foreach ($position as $p) {
            Position::create($p);
        }
    }
}
