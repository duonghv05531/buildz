@extends('layouts.admin')
@section('title','Edit a setting')
@section('content')

<div class="container">
    <div class="row">

        <form action="{{route('setting.update',$set->id)}}" method="POST" role="form">
            @csrf
            @method('PUT')
            <legend>Edit an setting</legend>

            <div class="form-group">
                <label for="">Work time</label>
                <input name="work_time" type="text" class="form-control" id="" placeholder="Input field" value="{{$set->work_time}}">
            </div>
            <div class="form-group">
                <label for="">Hotline</label>
                <input name="hotline" type="text" class="form-control" id="" placeholder="Input field" value="{{$set->hotline}}">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input name="address" type="text" class="form-control" id="" placeholder="Input field" value="{{$set->address}}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="text" class="form-control" id="" placeholder="Input field" value="{{$set->email}}">
            </div>
            <div class="form-group">
                <label for="">Site name</label>
                <input name="site_name" type="text" class="form-control" id="" placeholder="Input field" value="{{$set->site_name}}">
            </div>
            <div class="form-group">
                <label for="">Year</label>
                <input name="year" type="text" class="form-control" id="" placeholder="Input field" value="{{$set->year}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

@endsection