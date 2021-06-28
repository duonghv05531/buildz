@extends('layouts.admin')
@section('title','Setting')
@section('content')

<div class="container">
    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Work time</th>
                    <th>Hotline</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Site name</th>
                    <th>Year</th>
                    <th>Action
                        <a class="btn btn-small btn-outline-primary" href="{{route('setting.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($set as $s)
                <tr>
                    <td>{{$s->work_time}}</td>
                    <td>{{$s->hotline}}</td>
                    <td>{{$s->address}}</td>
                    <td>{{$s->email}}</td>
                    <td>{{$s->site_name}}</td>
                    <td>{{$s->year}}</td>
                    <td>
                        <a class="btn btn-small btn-outline-warning" href="{{route('setting.edit',$s->id)}}">Edit</a> <br> <br>
                        <form action="{{asset('')}}setting/{{$s->id}}" method="post" onsubmit="return confirm('Are you sure to delete')">
                            {{@csrf_field()}}
                            {{@method_field('delete')}}
                            <button class="btn btn-small btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection