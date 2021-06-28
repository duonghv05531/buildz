@extends('layouts.app')
@section('title','Blog')
@section('content')
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Latest Blog</p>
            <h2>Latest From Our Blog</h2>
        </div>
        <div class="row blog-page">
            @foreach($article as $a)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset("$a->img")}}" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>{{$a->title}}</h3>
                        <a class="btn" href="">+</a>
                    </div>
                    <div class="blog-meta">
                        <p>By<a href="">{{$a->author}}</a></p>
                        <p>In<a href="">{{$a->cate_name}}</a></p>
                    </div>
                    <div class="blog-text">
                        <p>
                            {{$a->content}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12" style="text-align: center;">
                {{$article->links()}}
            </div>
        </div>
    </div>
</div>
@endsection