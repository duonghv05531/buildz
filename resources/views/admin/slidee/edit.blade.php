@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">

        <form action="{{route('slidee.update',$slidee->id)}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <legend>Edit an slide engineer</legend>

            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Name" value="{{$slidee->name}}">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <br>
                <img src="{{asset("$slidee->avatar")}}" alt="">
                <br> <br>
                <input name="avatar" type="file" class="form-control" id="" placeholder="avatar">
                <input name="avatar" type="hidden" value="{{$slidee->avatar}}">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <input name="position" type="text" class="form-control" id="" placeholder="Position" value="{{$slidee->position}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('slidee.index')}}"><button class="btn btn-outline-danger" type="button">Cancel</button></a>
        </form>

    </div>
</div>

@endsection