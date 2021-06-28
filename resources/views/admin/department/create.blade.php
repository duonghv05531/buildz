@extends('layouts.admin')
@section('title','Create a department')
@section('content')
<div class="container">
    <div class="row">

        <form action="{{route('department.store')}}" method="POST" role="form">
            @csrf
            <legend>Add an department</legend>

            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('department.index')}}"><button class="btn btn-outline-danger" type="button">Cancel</button></a>
        </form>


    </div>
</div>
@endsection