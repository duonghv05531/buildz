@extends('layouts.admin')
@section('title','Service')
@section('content')


<div class="container">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Delay</th>
                    <th>Action
                        <a class="btn btn-small btn-outline-primary" href="{{route('service.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($service as $s)
                <tr>
                    <td>{{$s->name}}</td>
                    <td><img class="w-75" src="{{ asset("$s->img") }}" alt=""></td>
                    <td>{{$s->description}}</td>
                    <td>{{$s->delay}}</td>
                    <td>
                        <a class="btn btn-small btn-outline-warning" href="{{route('service.edit',$s->id)}}">Edit</a> <br> <br>
                        <form action="{{asset('')}}service/{{$s->id}}" method="post" onsubmit="return confirm('Are you sure delete this Service')">
                            {{@csrf_field()}}
                            {{@method_field('delete')}}
                            <button class="btn btn-small btn-outline-danger" type="submit">Dele</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection