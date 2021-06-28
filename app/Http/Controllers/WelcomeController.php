<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Ask;
use App\Models\Engineer;
use App\Models\Setting;
use App\Models\Slide;
use App\Models\Service;
use App\Models\SlideCustomer;
use App\Models\SlideEngineer;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public $service;
    public $set;
    public $slide;
    public $engineer;
    public function __construct()
    {
        $this->service = Service::all();
        $this->set = Setting::all()->last();
        $this->slide = Slide::all();
        $this->engineer = SlideEngineer::all();
    }
    public function index()
    {

        $ask = Ask::all();
        $cusslide = SlideCustomer::all();

        return view('welcome', [
            'set' => $this->set,
            'slide' => $this->slide,
            'service' => $this->service,
            'engineer' => $this->engineer,
            'ask' => $ask,
            'cusslide' => $cusslide
        ]);
    }
    public function service()
    {
        $ask = Ask::all();
        $service = Service::all();
        return view('service', ['ask' => $ask, 'service' => $service, 'set' => $this->set]);
    }
    public function about()
    {
        $ask = Ask::all();
        return view('about', ['ask' => $ask, 'set' => $this->set]);
    }
    public function team()
    {

        return view('team', ['set' => $this->set, 'engineer' => $this->engineer]);
    }
    public function project()
    {
        return view('project', ['set' => $this->set]);
    }
    public function blog()
    {
        $article = Article::join('categories', 'articles.category_id', '=', 'categories.id')
            ->select('articles.*', 'categories.name as cate_name')
            ->paginate(6);
        return view('blog', ['set' => $this->set, 'article' => $article]);
    }
    public function contact()
    {
        return view('contact', ['set' => $this->set]);
    }
}
