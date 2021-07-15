@extends('layouts.admin')
@section('title','Edit a department')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('department.update',$department->id)}}" method="POST" role="form">
            @csrf
            @method('PUT')
            <legend>Edit an department</legend>

            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Name" value="{{$department->name}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('department.index')}}"><button class="btn btn-outline-danger" type="button">Cancel</button></a>
        </form>
    </div>
</div>
@endsection