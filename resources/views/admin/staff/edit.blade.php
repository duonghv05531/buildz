@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">

        <form action="{{route('staff.update',$staff->id)}}" method="POST" role="form">
            @csrf
            @method('PUT')
            <legend>Edit and Staff</legend>

            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Name" value="{{$staff->name}}">
            </div>
            <div class="form-group">
                <label for="">Department</label>
                <input name="department" type="text" class="form-control" id="" placeholder="Department" value="{{$staff->department}}">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <input name="position" type="text" class="form-control" id="" placeholder="Position" value="{{$staff->position}}">
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input name="age" type="text" class="form-control" id="" placeholder="Age" value="{{$staff->age}}">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input name="address" type="text" class="form-control" id="" placeholder="Address" value="{{$staff->address}}">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input name="phone" type="text" class="form-control" id="" placeholder="Phone" value="{{$staff->phone}}">
            </div>
            <div class="form-group">
                <label for="">Bank Number</label>
                <input name="bank_number" type="text" class="form-control" id="" placeholder="Bank Number" value="{{$staff->bank_number}}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="text" class="form-control" id="" placeholder="email" value="{{$staff->email}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>

@endsection