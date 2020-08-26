@extends('adminlte::page')

@section('title', 'Create new user')
@section('content_header')
    <h1>Create new user</h1>
@stop

@section('content')
    @include('admin._messages')
    <form action="/admin/user/{{$user->id}}" class="form-group" method="post">
        @csrf
        @method('PUT')
        @include('admin.user._form')
        <button type="submit" class="btn btn-dark">Update</button>
    </form>
@stop
