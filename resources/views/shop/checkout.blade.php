@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/checkout-complete" method="post">
            @csrf
            @foreach(session('cart') as $item)

                <div class="card w-100">
                    <div class="card-body item-order">

                        <div class="item-order__img">
                            <img class="item-order__pictures" src="{{$item['img']}}" alt="">
                        </div>
                        <div>
                            <h5 class="card-title">{{$item['name']}}</h5>
                            <span class="mr-5">price: {{$item['price']}}</span>
                            <span class="mr-5">Quantity: {{$item['qty']}}</span>
                            <span>Sum: {{$item['price'] * $item['qty']}}</span>
                        </div>

                    </div>
                </div>

            @endforeach
            <label for="">City</label>
            <input type="text" name="city"><br>
            <label for="">Post Office</label>
            <input type="text" name="post_office"><br>
            <label for="">phone</label>
            <input type="text" name="phone">
            <input type="hidden" name="total_sum" value="{{session('total')}}">
            @if (Auth::check())
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            @endif



                <div class="container__footer text-center ">
                    <span >Total sum {{session('total') }}</span>
                </div>
            @guest
                <p>Войдите или зарегестрируйтесь</p>
            @else
                <button type="submit" class="btn btn-primary">Buy</button>
            @endguest
        </form>


    </div>
@endsection
