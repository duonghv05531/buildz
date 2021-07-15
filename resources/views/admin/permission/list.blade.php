@extends('layouts.admin')
@section('title','Permission')
@section('content')
<div class="container">
    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Display name</th>
                    <th>
                        Action
                        <a class="btn btn-small btn-primary" href="{{route('permission.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($permission as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->display_name}}</td>
                    <td>
                        <a class="btn btn-outline-warning" href="{{route('permission.edit',$p->id)}}">Edit</a>
                        <br><br>
                        <form action="{{asset('')}}permission/{{$p->id}}" method="post">
                            {{@csrf_field()}}
                            {{@method_field('delete')}}
                            <button class="btn btn-outline-danger" type="submit">Dele</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection