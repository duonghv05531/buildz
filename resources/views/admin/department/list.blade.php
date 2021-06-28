@extends('layouts.admin')
@section('title','Department')
@section('content')
<div class="container">
    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th><a href="{{route('position.index')}}">Position</a>
                        <a class="btn btn-small btn-outline-primary" href="{{route('position.create')}}">Add</a>
                    </th>

                    <th>Action
                        <a class="btn btn-small btn-outline-primary" href="{{route('department.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            @foreach($department as $d)
            <tr>
                <td>{{$d->name}}</td>
                <td>
                    <ul>
                        @foreach($position as $p)
                        @if($p->department_id == $d->id)
                        <li>
                            <a href="{{route('position.edit',$p->id)}}">{{$p->name}}</a>
                            <form action="{{asset('')}}position/{{$p->id}}" method="POST">
                                {{@csrf_field()}}
                                {{@method_field('delete')}}
                                <button class="btn btn-outline-danger" type="submit">Dele</button>
                            </form>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </td>
                <td>
                    <a href="{{route('department.edit',$d->id)}}">Edit</a>
                    <br><br>
                    <form action="{{asset('')}}department/{{$d->id}}" method="POST">
                        {{@csrf_field()}}
                        {{@method_field('delete')}}
                        <button class="btn btn-outline-danger" type="submit">Dele</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tbody>

            </tbody>
        </table>

    </div>
</div>
@endsection