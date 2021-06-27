<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service;
        $service = [
            [
                'name' => 'Building Construction',
                'img' => 'img/service-1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis 
                ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.',
                'delay' => '0.1s'
            ],
            [
                'name' => 'House Renovation',
                'img' => 'img/service-2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis 
                ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.',
                'delay' => '0.2s'
            ],
            [
                'name' => 'Architecture Design',
                'img' => 'img/service-3.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis 
                ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.',
                'delay' => '0.3s'
            ],
            [
                'name' => 'Interior Design',
                'img' => 'img/service-4.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis 
                ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.',
                'delay' => '0.4s'
            ],
            [
                'name' => 'Fixing & Support',
                'img' => 'img/service-5.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis 
                ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.',
                'delay' => '0.5s'
            ],
            [
                'name' => 'Painting',
                'img' => 'img/service-6.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis 
                ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.',
                'delay' => '0.6s'
            ],

        ];
        foreach ($service as $s) {
            Service::create($s);
        }
    }
}
