@extends('layouts.admin')
@section('title','Permissions of role')
@section('content')

<div class="container">

    <div class="row">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($role as $r)
                <tr>
                    <td>{{$r->display_name}}</td>

                    <td>
                        <ul>
                            @foreach($permission as $p)
                            @if($p->role_id == $r->id)
                            <li style="list-style-type:none;">{{$p->display_name}}</li>
                            @endif
                            @endforeach
                        </ul>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection