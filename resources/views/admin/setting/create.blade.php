@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">

        <form action="{{route('setting.store')}}" method="POST" role="form">
            @csrf
            <legend>Add an setting</legend>

            <div class="form-group">
                <label for="">Work time</label>
                <input name="work_time" type="text" class="form-control" id="" placeholder="Work time">
            </div>
            <div class="form-group">
                <label for="">Hotline</label>
                <input name="hotline" type="text" class="form-control" id="" placeholder="Hotline">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input name="address" type="text" class="form-control" id="" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="text" class="form-control" id="" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">Site name</label>
                <input name="site_name" type="text" class="form-control" id="" placeholder="Site name">
            </div>
            <div class="form-group">
                <label for="">Year</label>
                <input name="year" type="text" class="form-control" id="" placeholder="Year">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection