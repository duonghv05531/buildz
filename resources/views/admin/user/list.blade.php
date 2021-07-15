@extends('layouts.admin');
@section('title','User')
@section('content')

<div class="container">

    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>
                        Action
                        <a class="btn btn-outline-primary" href="{{route('user.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $u)
                <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <ul>
                            @foreach($role as $r)
                            @if($r->user_id == $u->id)
                            <li>{{$r->display_name}}</li>
                            @endif
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning" href="{{route('user.edit',$u->id)}}">Edit</a>
                        <form action="{{asset('')}}user/{{$u->id}}" method="post">
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