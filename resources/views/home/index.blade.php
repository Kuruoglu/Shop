@extends('layouts.app')


@section('content')
    <h2 class="text-center mb-3">Categories</h2>

    <div class="container">
        <div class="row">
                @foreach($categories as $category)
                <div class="col-md-3 mb-5">
                    <a href="/category/{{$category->slug}}" class="">
                    {{$category->name }} ({{$category->product->count()}})
                    <img src="{{$category->img}}" alt="" class="img-fluid">
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <h2 class="text-center mb-3">Recommended</h2>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-5">

                    <a href="/product/{{$product->slug}}" class="">
                        {{$product->name }}

                    <img src="{{$product->img}}" alt="" class="img-fluid">
                Price: {{$product->price}}
                    </a>
                </div>
            @endforeach
        </div>

    </div>
{{--    <div class="container">--}}
{{--        <div class="your-class">--}}
{{--            @foreach($products as $product)--}}
{{--                <div class="col-md-3 mb-5">--}}
{{--                    <a href="/product/{{$product->slug}}" class="">--}}
{{--                        {{$product->name }}--}}
{{--                    <img src="{{$product->img}}" alt="" class="img-fluid">--}}
{{--                    Price: {{$product->price}}--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

{{--    </div>--}}


@endsection

{{--если не писать секцию footer to отобразиться меню--}}
@section('footer')
    @parent
    реклама
@endsection
