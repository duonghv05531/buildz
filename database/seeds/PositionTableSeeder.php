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
        for ($i = 1; $i < 5; $i++) {
            $position = new Position;
            $position->name = 'Position' . $i;
            $position->department_id = $i;
            $position->save();
        }
    }
}
