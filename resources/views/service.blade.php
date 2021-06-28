@extends('layouts.app')
@section('title','Service')
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Services</h2>
            </div>
            <div class="col-12">
                <a href="{{route('welcome')}}">Home</a>
                <a href="">Our Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
@include('layouts.service')
@endsection