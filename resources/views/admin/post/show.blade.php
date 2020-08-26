@extends('adminlte::page')


@section('title', `Comment`);

{{--@section('content_header')--}}
{{--    <h1>{{$product->name}}</h1>--}}
{{--@stop--}}


@section('content')
    <div class="container">
        <form class="form-group">
            <div class="product_head">
                <h1>Comment</h1>
            </div>
            <img src="{{$post->img}}" class="img-fluid" alt="Responsive image">

            <div class="container_property">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                    </div>
                    <input type="text" disabled class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" value="{{$post->title}}">
                </div>

                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Post</span>
                    </div>
                    <textarea class="form-control " disabled aria-label="Large" aria-describedby="inputGroup-sizing-sm">{{$post->description}}</textarea>
                </div>
            </div>

            <a href="/admin/post/{{$post->id}}/edit">Edit post</a>

        </form>
    </div>

@stop

