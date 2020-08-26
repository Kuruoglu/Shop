@extends('adminlte::page')

@section('title', 'Create new product')
@section('content_header')
    <h1>Create  new products </h1>
@stop

@section('content')
    @include('admin._messages')
    <form action="/admin/product" class="form-group" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.product._form')
        <button type="submit" class="btn btn-dark">Create</button>
    </form>
@stop
