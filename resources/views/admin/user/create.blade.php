@extends('adminlte::page')

@section('title', 'Create new user')
@section('content_header')
    <h1>Create new user</h1>
@stop

@section('content')
    @include('admin._messages')
    <form action="/admin/user" class="form-group" method="post">
        @csrf
        @include('admin.user._form')
        <button type="submit" class="btn btn-dark">Create</button>
    </form>
@stop
