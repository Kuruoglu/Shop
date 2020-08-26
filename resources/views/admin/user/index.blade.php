@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Users</h1>
        <div>
            <a class="btn btn-dark" href="/admin/user/create">+ Add User</a>
        </div>
    </div>

@stop

@section('content')
    @include('admin._messages')
    <table class="table datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email_verified_at</th>
            <th>Updated_at</th>
            <th>Role</th>

            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $item)

            <tr>
                <td>{{$loop->iteration}}</td>

                <td><a href="/admin/user/{{$item->id}}">{{$item->name}}</a></td>
                <td>{{$item->email}}</td>
                <td>{{$item->email_verified_at ? $item->email_verified_at : 'Not verified'}}</td>
                <td>{{$item->updated_at}}</td>
                <td>{{$item->role}}</td>
                <td class="d-flex">
                    <a class="btn btn-success" href="/admin/user/{{$item->id}}/edit"><i class="fa fa-edit"></i></a>
                    <form action="/admin/user/{{$item->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
@section('js')
    <script>
        $(document).ready(function () {
            $('.datatable').DataTable();
        })
    </script>
@stop
