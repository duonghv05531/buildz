@extends('layouts.admin')
@section('content')
<div class="container">

    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Avatar</th>
                    <th>Position</th>
                    <th>
                        Action
                        <a class="btn btn-small btn-outline-primary" href="{{route('slidee.create')}}">add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($engineer as $e)
                <tr>
                    <td>{{$e->name}}</td>
                    <td><img class="w-25" src="{{asset("$e->avatar")}}" alt=""></td>
                    <td>{{$e->position}}</td>
                    <td>
                        <a class="btn btn-small btn-outline-warning" href="{{route('slidee.edit',$e->id)}}">Edit</a>
                        <br><br>
                        <form action="{{asset('')}}slidee/{{$e->id}}" method="POST">
                            {{@csrf_field()}}
                            {{@method_field('delete')}}
                            <button class="btn btn-small btn-outline-danger">Dele</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection