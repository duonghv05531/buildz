@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">

        <form action="{{route('slidee.store')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <legend>Add an slide engineer</legend>

            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input name="avatar" type="file" class="form-control" id="" placeholder="avatar">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <input name="position" type="text" class="form-control" id="" placeholder="Position">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

@endsection