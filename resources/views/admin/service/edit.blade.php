@extends('layouts.admin');
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
                <label for="">Description</label>
                <input name="description" type="text" class="form-control" id="" placeholder="Service Description" value="{{$service->description}}">
            </div>
            <div class="form-group">
                <label for="">Delay</label>
                <input name="delay" type="text" class="form-control" id="" placeholder="Delay" value="{{$service->delay}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection