@extends('layouts.app')
@section('content')
<!-- Top Bar Start -->
<!-- Nav Bar End -->
<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($slide as $s)
        @if($s->id == 1)
        <div class="carousel-item active">
            <img src="{{asset("$s->img")}}" alt="Carousel Image">

            <div class="carousel-caption">

                <p class="animated fadeInRight">{{$s->content}}
                </p>
                <h1 class="animated fadeInLeft">{{$s->slogan}} </h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a> <br>
                @guest
                @else
                <a class="btn btn-small btn-primary" href="{{route('setting.edit',$set->id)}}">Edit</a>
                @endguest
            </div>
        </div>
        @else
        <div class="carousel-item">
            <img src="{{asset("$s->img")}}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{$s->content}}</p>
                <h1 class="animated fadeInLeft">{{$s->slogan}}</h1>
                <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                <br>
                @guest
                @else
                <a class="btn btn-small btn-primary active" href="{{route('setting.edit',$set->id)}}">Edit</a>
                @endguest
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->


<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Expert Worker</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="feature-text">
                        <h3>Quality Work</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="feature-text">
                        <h3>24/7 Support</h3>
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Welcome to Builderz</p>
                    <h2>{{$set->year}}
                        @guest
                        @else
                        <a class="btn btn-small btn-primary active" href="{{route('setting.edit',$set->id)}}">Edit</a>
                        @endguest Years Experience
                    </h2>
                </div>
                <div class="about-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="fact">
    <div class="container-fluid">
        <div class="row counters">
            <div class="col-md-6 fact-left wow slideInLeft">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">109</h2>
                            <p>Expert Workers</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">485</h2>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fact-right wow slideInRight">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-address"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">789</h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">890</h2>
                            <p>Running Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Services</p>
            <h2>We Provide Services</h2>
        </div>
        <div class="row">
            @foreach($service as $s)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$s->delay}}">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset("$s->img")}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{$s->description}}
                                @guest
                                @else
                                <a class="btn-primary active" href="{{route('service.edit',$s->id)}}">Edit</a>
                                @endguest
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{$s->name}}</h3>
                        <a class="btn" href="{{asset("$s->img")}}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Video Start -->
<div class="video wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/H0UHZ-OwT04" data-target="#videoModal">
            <span></span>
        </button>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Team</p>
            <h2>Meet Our Engineer</h2>
        </div>
        <div class="row">
            @foreach($engineer as $e)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset("$e->avatar")}}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>{{$e->name}}</h2>
                        <p>{{$e->position}}</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href="">
                            @guest
                            @else
                            <a class="btn-primary active" href="{{route('engineer.edit',$e->id)}}">Edit</a>
                            @endguest
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Frequently Asked Question</p>
            <h2>You May Ask</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    @foreach($ask as $a)
                    @if($a->id <6) <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#{{$a->href}}">
                                {{$a->question}}
                            </a>
                        </div>
                        <div id="{{$a->href}}" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                {{$a->answer}}
                            </div>
                        </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div id="accordion-2">
                @foreach($ask as $a)
                @if($a->id > 5)
                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#{{$a->href}}">
                            {{$a->question}}
                        </a>
                    </div>
                    <div id="{{$a->href}}" class="collapse" data-parent="#accordion-2">
                        <div class="card-body">
                            {{$a->answer}}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<!-- FAQs End -->


<!-- Testimonial Start -->
<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-nav">
                    @foreach($cusslide as $cs)
                    <div class="slider-nav"><img src="{{asset("$cs->avatar")}}" alt="Testimonial"></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    @foreach($cusslide as $cs)
                    <div class="slider-item">
                        <h3>{{$cs->name}}</h3>
                        <h4>{{$cs->profession}}</h4>
                        <p>{{$cs->opinion}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Latest Blog</p>
            <h2>Latest From Our Blog</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>Lorem ipsum dolor sit</h3>
                        <a class="btn" href="">+</a>
                    </div>
                    <div class="blog-meta">
                        <p>By<a href="">Admin</a></p>
                        <p>In<a href="">Construction</a></p>
                    </div>
                    <div class="blog-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>Lorem ipsum dolor sit</h3>
                        <a class="btn" href="">+</a>
                    </div>
                    <div class="blog-meta">
                        <p>By<a href="">Admin</a></p>
                        <p>In<a href="">Construction</a></p>
                    </div>
                    <div class="blog-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-3.jpg" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>Lorem ipsum dolor sit</h3>
                        <a class="btn" href="">+</a>
                    </div>
                    <div class="blog-meta">
                        <p>By<a href="">Admin</a></p>
                        <p>In<a href="">Construction</a></p>
                    </div>
                    <div class="blog-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection


































<!-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif -->