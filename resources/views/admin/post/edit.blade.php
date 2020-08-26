@extends('adminlte::page')


@section('title', `Post`);

{{--@section('content_header')--}}
{{--    <h1>{{$product->name}}</h1>--}}
{{--@stop--}}


@section('content')
    <div class="container">
        <div class="">
            <h1>Post</h1>'

        </div>
        <form class="form-group" action="/admin/post/{{$post->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('admin.post._form')

            <button type="submit" class="btn btn-dark">Update</button>

        </form>
    </div>

@stop

