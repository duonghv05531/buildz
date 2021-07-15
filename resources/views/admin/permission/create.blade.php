@extends('layouts.admin')
@section('title','Add a permission')
@section('content')
<div class="container">
    <div class="row">

        <form action="{{route('permission.store')}}" method="POST" role="form">
            @csrf
            <legend>Add a permission</legend>

            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="">Display name</label>
                <input name="display_name" type="text" class="form-control" id="" placeholder="Display name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection