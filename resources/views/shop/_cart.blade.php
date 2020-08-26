@if(session('cart'))

    <table class="table">
        <thead>
        <tr>
            <th>Img</th>
            <th>Name</th>
            <th>Price</th>
            <th class="text-center">Quantity</th>
            <th>Sum</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
@foreach(session('cart') as $product)
        <tr>
            <td><img src="{{$product['img']}}" alt="" style="width: 70px"></td>
            <td>{{$product['name']}}</td>
            <td>{{$product['price']}}</td>
            <td class="text-center order-item">
                <div >
                    <button class="btn btn-light plus" data-id="{{$product['id']}}">+</button>
                    <input type="text" class="w-25 text-center input" value="{{$product['qty']}}"  >
                    <button class="btn btn-light minus" data-id="{{$product['id']}}">-</button>
                </div>

            </td>
            <td>{{$product['price'] * $product['qty']}}</td>
            <td>
                <button class="btn btn-primary btn-cart-delete" data-id="{{$product['id']}}">Delete</button>
            </td>
        </tr>
@endforeach
        </tbody>
        <tfood>
            <tr>
                <td colspan="4" class="text-right">Total:</td>
                <td colspan="2">{{ session('total') }}</td>
            </tr>
        </tfood>
    </table>
    {{$product['name']}} <br>

@else
Cart is empty :((((
@endif
