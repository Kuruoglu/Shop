@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <h6 class="text">Category: {{$product->category->name}}</h6>
        <h2 class="text-center mb-3">Name: {{$product->name}}</h2>
    </div>
    <div class="col-md-3 mb-5">
        <img src="{{$product->img}}" alt="{{$product->name}}" class="img-fluid">
        <p>Price: {{$product->price}}</p>
    </div>
</div>


    <div class="container">
        <h2>Comments</h2>
        <div>
            <form action="comment" method="post" class="form-group">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user() ? Auth::user()->id : null}}" >
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="hidden" name="product_name" value="{{$product->name}}">
                <textarea name="comment" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary mt-1">Send</button>
            </form>

        </div>
        <div>
            <form action="/" class="add-to-cart">
                @csrf
                <label for="qty">Количество</label>
                <input type="number" name="qty" id="qty" value="1" min="1">
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button class="btn btn-primary">Add to cart</button>
            </form>
        </div>

        @foreach($reviews as $review)

            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17351749314%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17351749314%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.828125%22%20y%3D%2216.965625%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">{{$review->user->name ?? 'Guest'}}</strong>
                        {{$review->comment}}
                    </p>
                    <p class="  small ">
                        {{$review->created_at}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>

@endsection

