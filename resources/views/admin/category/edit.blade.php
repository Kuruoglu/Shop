@extends('adminlte::page')

@section('title', 'Edit  category ' . $category->name)
@section('content_header')
    <h1>Edit  category {{$category->name}}</h1>

@stop
@section('content')
    @include('admin._messages')
    <form action="/admin/category/{{$category->id}}" class="form-group" method="post" enctype="multipart/form-data">
        @method('PUT')
       @include('admin.category._form')
    </form>
@stop

