<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $article = new Article;
        $article = [
            [
                'category_id' => '1',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-1.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '2',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-2.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '3',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-3.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '4',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-1.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '5',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-2.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '6',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-3.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '1',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-2.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '2',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-2.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '3',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-3.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '4',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-1.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '5',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-2.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
            [
                'category_id' => '6',
                'title' => 'Lorem ipsum dolor sit',
                'img' => 'img/blog-3.jpg',
                'content' => 'Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor',
                'author' => 'admin'
            ],
        ];
        foreach ($article as $c) {
            Article::create($c);
        }
    }
}
