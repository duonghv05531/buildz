<?php

use App\Models\Salary;
use Illuminate\Database\Seeder;

class SalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $point = 1000;
        for ($i = 1; $i < 5; $i++) {
            $Salary = new Salary;
            $Salary->position_id = $i;
            $Salary->factor =  $point * $i;
            $Salary->save();
        }
    }
}
