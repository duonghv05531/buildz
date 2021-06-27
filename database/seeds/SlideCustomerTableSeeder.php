<?php

use App\Models\Customer;
use App\Models\SlideCustomer;
use Illuminate\Database\Seeder;

class SlideCustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new SlideCustomer();
        $customer = [
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-1.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ],
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-2.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ],
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-3.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ],
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-4.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ],
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-1.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ],
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-2.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ],
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-3.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ],
            [
                'name' => 'Customer Name',
                'avatar' => 'img/testimonial-4.jpg',
                'profession' => 'profession',
                'opinion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, 
                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.'
            ]
        ];

        foreach ($customer as $c) {
            SlideCustomer::create($c);
        }
    }
}
