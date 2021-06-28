@extends('layouts.admin')
@section('title','Create a staff')
@section('content')

<div class="container">
    <div class="row">

        <form action="{{route('staff.store')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <legend>Add an staff</legend>
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input name="avatar" type="file" class="form-control" id="" placeholder="Avatar">
            </div>
            <div class="form-group">
                <label for="">Department</label>

                <select name="department" id="input" class="form-control" required="required">
                    @foreach($department as $d)
                    <option value="{{$d->id}}">{{$d->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="">Position</label>
                <select name="position" id="input" class="form-control" required="required">
                    @foreach($position as $p)
                    <option value="{{$p->id}}">{{$p->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input name="age" type="number" class="form-control" id="" placeholder="Age">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input name="address" type="text" class="form-control" id="" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input name="phone" type="text" class="form-control" id="" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="">Bank Account Number </label>
                <input name="bank_number" type="number" class="form-control" id="" placeholder="Bank Account Number">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="text" class="form-control" id="" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('staff.index')}}"><button class="btn btn-outline-danger" type="button">Cancel</button></a>
        </form>

    </div>
</div>

@endsection