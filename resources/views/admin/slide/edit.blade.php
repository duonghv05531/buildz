@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">

        <form action="{{route('slide.update',$slide->id)}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <legend>Edit an slide</legend>
            <div class="form-group">
                <label for="">Image</label><br>
                <img class="w-75" src="{{asset("$slide->img")}}" alt=""> <br><br>
                <input name="img" type="file" class="form-control" id="">
                <input name="img" type="hidden" value="{{$slide->img}}">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input name="content" type="text" class="form-control" id="" placeholder="Content" value="{{$slide->content}}">
            </div>
            <div class="form-group">
                <label for="">Slogan</label>
                <input name="slogan" type="text" class="form-control" id="" placeholder="Slogan" value="{{$slide->slogan}}">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input name="slug" type="text" class="form-control" id="" placeholder="Slug" value="{{$slide->slug}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('slide.index')}}"><button class="btn btn-outline-danger" type="button">Cancel</button></a>
        </form>

    </div>
</div>
@endsection