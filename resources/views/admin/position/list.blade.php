@extends('layouts.admin')
@section('title','Position')
@section('content')
<div class="container">
    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>
                        Action <br>
                        <a class="btn btn-small btn-outline-primary" href="{{route('position.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($position as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->department_name}}</td>
                    <td>
                        <a class="btn btn-outline btn-outline-warning" href="{{route('position.edit',$p->id)}}">Edit</a>
                        <br><br>
                        <form action="{{asset('')}}position/{{$p->id}}" method="post">
                            {{@csrf_field()}}
                            {{@method_field('delete')}}
                            <button class="btn btn-small btn-outline-danger" type="submite">Dele</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection