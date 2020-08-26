@extends('adminlte::page')


@section('title', `$user->name`);

{{--@section('content_header')--}}
{{--    <h1>{{$product->name}}</h1>--}}
{{--@stop--}}


@section('content')
    @include('admin._messages')
    <div class="container">
        <div class="product_head">
            <h1>{{$user->name}}</h1>

        </div>

        <div class="container_property">
            <p>Name: {{$user->name}}</p>
            <p>Email: {{$user->email}}</p>
            <p>email_verified_at: {{$user->email_verified_at}}</p>
            <p>created_at: {{$user->created_at}}</p>
            <p>updated_at: {{$user->updated_at}}</p>
            <p>role: {{$user->role}}</p>

        </div>
        <a class="btn btn-dark" href="/admin/user/{{$user->id}}/edit">Edit user</a>
    </div>

@stop

