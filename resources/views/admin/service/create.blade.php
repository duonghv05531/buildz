@extends('layouts.admin');
@section('title','Create a service')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('service.store')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <legend>Add an service</legend>
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Service Name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input name="description" type="text" class="form-control" id="" placeholder="Service Description">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input name="image" type="file" class="form-control" id="" placeholder="Service Image">
            </div>
            <div class="form-group">
                <label for="">Delay</label>
                <input name="delay" type="text" class="form-control" id="" placeholder="Delay">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('service.index')}}"><button class="btn btn-outline-danger" type="button">Cancel</button></a>
        </form>
    </div>
</div>
@endsection