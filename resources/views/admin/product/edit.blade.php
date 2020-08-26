@extends('adminlte::page')

@section('title', 'Update  product')
@section('content_header')
    <h1>Edit  product</h1>
@stop

@section('content')
    @include('admin._messages')
    <form action="/admin/product/{{$product->id}}" class="form-group" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.product._form')
        <button type="submit" class="btn btn-dark">Update</button>
    </form>
@stop

