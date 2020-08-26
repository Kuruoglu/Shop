@extends('layouts.app')

@section('content')
{{--    {{$products}}--}}
    <h2 class="text-center mb-3">{{$category->name}}</h2>
<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-5">

                <a href="/product/{{$product->slug}}">{{$product->name }}</a>
                <span>Comments: ({{$product->reviews->count()}})</span>
                <img src="{{$product->img}}" alt="" class="img-fluid">
                Price: {{$product->price}}
            </div>
        @endforeach
    </div>
</div>
@endsection


