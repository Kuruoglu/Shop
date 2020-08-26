@extends('adminlte::page')


@section('title', `Comment`);

{{--@section('content_header')--}}
{{--    <h1>{{$product->name}}</h1>--}}
{{--@stop--}}


@section('content')
    <div class="container">
            <div class="product_head">
                <h1>Comment</h1>
            </div>

        <form action="/admin/review/{{$review->id}}" class="form-group" method="post">
            @csrf
            @method('PUT')
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

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Comment</span>
                    </div>
                    <textarea class="form-control " name="comment" aria-label="Large" aria-describedby="inputGroup-sizing-sm">{{$review->comment}}</textarea>

            </div>

                <button type="submit" class="btn btn-dark">Update</button>

        </form>
    </div>

@stop

@section('js')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('comment', options);

    </script>
@stop


