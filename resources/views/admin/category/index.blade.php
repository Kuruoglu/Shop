@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1 class="text">Categories</h1>
        <a class="btn btn-dark btn-sm" href="/admin/category/create">Add category</a>
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
                <th>Products</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $item)
                <tr>
                    <td >{{$loop->iteration}}</td>
                    <td><img src="{{$item->img}}" style="width: 50px" alt="{{$item->name}}"></td>
                    <td><a href="/admin/category/{{$item->id}}">{{$item->name}}</a></td>
                    <td>{{$item->slug}}</td>
                    <td>{{$item->product->count()}}</td>
                    <td class="d-flex justify-content-lg-end">
                        <a href="{{route('category.edit', ['category' => $item->id])}}" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                        <form action="/admin/category/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"> <i class="fa fa-trash"></i></button>

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
