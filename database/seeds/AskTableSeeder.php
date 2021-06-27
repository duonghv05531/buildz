<?php

use App\Models\Ask;
use Illuminate\Database\Seeder;

class AskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ask = new Ask;
        $ask = [
            [
                'question' => 'Lorem ipsum dolor sit amet 1?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 1',
                'href' => 'collapseOne'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 2?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 2',
                'href' => 'collapseTwo'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 3?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 3',
                'href' => 'collapseThree'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 4?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 4',
                'href' => 'collapseFour'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 5?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 5',
                'href' => 'collapseFive'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 6?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 6',
                'href' => 'collapseSix'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 7?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 7',
                'href' => 'collapseSeven'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 8?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 8',
                'href' => 'collapseEight'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 9?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 9',
                'href' => 'collapseNine'
            ],
            [
                'question' => 'Lorem ipsum dolor sit amet 10?',
                'answer' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non 10',
                'href' => 'collapseTen'
            ]
        ];
        foreach ($ask as $a) {
            Ask::create($a);
        }
    }
}
