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

            <div class="container_property">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Name</span>
                    </div>
                    <input type="text" disabled class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" value="{{$review->user['name']}}">
                </div>
                <div class="container_property">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">About</span>
                    </div>
                    <input type="text" class="form-control" disabled aria-label="Large" aria-describedby="inputGroup-sizing-sm" value="{{$review->product['name']}}">
                </div>
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Comment</span>
                    </div>
                    <textarea class="form-control " disabled aria-label="Large" aria-describedby="inputGroup-sizing-sm">{{$review->comment}}</textarea>
                </div>
            </div>

            <a href="/admin/review/{{$review->id}}/edit">Edit product</a>

        </form>
    </div>

@stop

