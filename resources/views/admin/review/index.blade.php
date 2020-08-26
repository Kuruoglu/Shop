@extends('adminlte::page')

@section('title', 'Reviews')

@section('content_header')
    <h1>Reviews</h1>

@stop

@section('content')
    @include('admin._messages');
    <table class="table datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Name/Role</th>
            <th>Product</th>
            <th>Comment</th>
            <th>Created_at</th>
            <th>Updated_at</th>


            <th></th>

        </tr>
        </thead>
        <tbody>

        @foreach($reviews as $item)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->user['name'] ? $item->user['name'] : 'Guest'}} | {{$item->user['role'] ? $item->user['role'] : 'User'}}</td>
                <td>{{$item->product['name']}}</td>
                <td >{{substr($item->comment, 0, 40)}}...</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>

                <td class="d-flex justify-content-between">
                    <a href="/admin/review/{{$item->id}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
                    <a href="/admin/review/{{$item->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <form action="/admin/review/{{$item->id}}" method="post">
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
    $(document).ready( function () {
    $('.datatable').DataTable();
    } );

    </script>
@stop
