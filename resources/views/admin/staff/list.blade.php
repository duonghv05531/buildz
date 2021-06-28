@extends('layouts.admin')
@section('content')

<div class="container">

    <div class="row">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Avatar</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Bank Number</th>
                    <th>Email</th>
                    <th>Action
                        <a class="btn btn-small btn-outline-primary" href="{{route('staff.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($staff as $s)
                <tr>
                    <td>{{$s->name}}</td>
                    <td><img class="w-50" src="{{asset("$s->avatar")}}" alt=""></td>
                    <td>{{$s->department_name}}</td>
                    <td>{{$s->position_name}}</td>
                    <td>{{$s->age}}</td>
                    <td>{{$s->address}}</td>
                    <td>{{$s->phone}}</td>
                    <td>{{$s->bank_number}}</td>
                    <td>{{$s->email}}</td>
                    <td>
                        <a class="btn btn-small btn-outline-warning" href="{{route('staff.edit',$s->id)}}">Edit</a>
                        <br><br>
                        <form action="{{asset('')}}staff/{{$s->id}}" method="post">
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