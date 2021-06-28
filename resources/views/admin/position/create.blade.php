@extends('layouts.admin')
@section('title','Create a position')
@section('content')
<div class="container">
    <div class="row">


        <form action="{{route('position.store')}}" method="POST" role="form">
            @csrf
            <legend>Add an department</legend>
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Position">
            </div>
            <div class="form-group">
                <label for="">Department</label>

                <select name="department" id="input" class="form-control" required="required">
                    @foreach($department as $d)
                    <option value="{{$d->id}}">{{$d->name}}</option>
                    @endforeach
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</div>
@endsection