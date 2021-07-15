@extends('layouts.admin');
@section('title','Edit a service')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('service.update',$service->id)}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <legend>Edit an service</legend>
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Service Name" value="{{$service->name}}">
            </div>
            <div class="form-group">
                <label for="">Image</label><br>
                <img class="w-75" src="{{asset("$service->img")}}" alt=""> <br><br>
                <input name="image" type="file" class="form-control" id="" placeholder="Service Image">
                <input name="img" type="hidden" value="{{$service->img}}">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input name="description" type="text" class="form-control" id="" placeholder="Service Description" value="{{$service->description}}">
            </div>
            <div class="form-group">
                <label for="">Delay</label>
                <input name="delay" type="text" class="form-control" id="" placeholder="Delay" value="{{$service->delay}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('service.index')}}"><button class="btn btn-outline-danger" type="button">Cancel</button></a>
        </form>
    </div>
</div>
@endsection