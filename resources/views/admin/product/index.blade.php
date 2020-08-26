@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <div class="d-flex justify-content-between">
    <h1>Products</h1>
        <a href="/admin/product/create" class="btn btn-dark">+ Add product</a>
    </div>
@stop

@section('content')
    @include('admin._messages')
    <table class="table datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Img</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Price</th>
            <th>Category</th>

            <th></th>
        </tr>
        </thead>
        <tbody>

            @foreach($products as $item)

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{$item->img}}" alt="{{$item->name}}" style="width: 50px"></td>
                    <td><a href="/admin/product/{{$item->id}}">{{$item->name}}</a></td>
                    <td>{{$item->slug}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->category['name'] ?? 'No category'}}</td>
                    <td class="d-flex">
                        <a href="/admin/product/{{$item->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <form action="/admin/product/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('js')
    <script>
        $(document).ready(function () {
            $('.datatable').DataTable();
        })
    </script>
@stop
