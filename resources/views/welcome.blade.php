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
@include('layouts.about')
<!-- About End -->


<!-- Fact Start -->
@include('layouts.fact')
<!-- Fact End -->


<!-- Service Start -->
@include('layouts.service')
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
@include('layouts.team')
<!-- Team End -->


<!-- FAQs Start -->
@include('layouts.ask')
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