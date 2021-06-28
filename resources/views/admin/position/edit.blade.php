@extends('layouts.admin')
@section('title','Edit a position')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('position.update',$position->id)}}" method="POST" role="form">
            @csrf
            @method('PUT')
            <legend>Edit an department</legend>
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Position" value="{{$position->name}}">
            </div>
            <div class="form-group">
                <label for="">Department</label>

                <select name="department" id="input" class="form-control" required="required">
                    @foreach($department as $d)
                    @if($d->id == $position->department_id)
                    <option selected value="{{$d->id}}">{{$d->name}}</option>
                    @else
                    <option value="{{$d->id}}">{{$d->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection