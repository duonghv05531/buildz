@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Slogan</th>
                    <th>Slug</th>
                    <th>
                        Action
                        <a class="btn btn-small btn-outline-primary" href="{{route('slide.create')}}">Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($slide as $s)
                <tr>
                    <td><img class="w-50" src="{{asset("$s->img")}}" alt=""></td>
                    <td>{{$s->content}}</td>
                    <td>{{$s->slogan}}</td>
                    <td>{{$s->slug}}</td>
                    <td>
                        <a class="btn btn-small btn-outline-warning" href="{{route('slide.edit',$s->id)}}">Edit</a>
                        <br><br>
                        <form action="{{asset('')}}slide/{{$s->id}}" method="post">
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