<?php

namespace App\Http\Controllers;

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

    public function __construct()
    {
        $this->service = Service::all();
        $this->set = Setting::all()->last();
        $this->slide = Slide::all();
    }
    public function index()
    {
        $engineer = SlideEngineer::all();
        $ask = Ask::all();
        $cusslide = SlideCustomer::all();

        return view('welcome', [
            'set' => $this->set,
            'slide' => $this->slide,
            'service' => $this->service,
            'engineer' => $engineer,
            'ask' => $ask,
            'cusslide' => $cusslide
        ]);
    }
}
