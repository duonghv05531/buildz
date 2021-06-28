@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">

        <form action="{{route('slide.store')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <legend>Add an slide</legend>

            <div class="form-group">
                <label for="">Image</label>
                <input name="img" type="file" class="form-control" id="" placeholder="Image">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input name="content" type="text" class="form-control" id="" placeholder="Content">
            </div>
            <div class="form-group">
                <label for="">Slogan</label>
                <input name="slogan" type="text" class="form-control" id="" placeholder="Slogan">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input name="slug" type="text" class="form-control" id="" placeholder="Slug">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
</div>
@endsection