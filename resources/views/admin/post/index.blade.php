@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Posts</h1>
        <a href="/admin/post/create" class="btn btn-dark"><i class="fa fa-plus-square"> Add post</i></a>
    </div>

@stop

@section('content')
{{--    {{$posts}}--}}
    @include('admin._messages')
    <table class="table datatable">
        <thead>
        <tr>
            <th>#</th>
            <th>Img</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Created_at</th>
            <th>Updated_at</th>


            <th></th>

        </tr>
        </thead>
        <tbody>

        @foreach($posts as $item)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img src="{{$item->img}}" alt="{{$item->name}}" style="width: 50px"></td>
                <td><a href="/admin/post/{{$item->id}}">{{$item->title}}</a></td>
                <td>{{$item->slug}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>

                <td class="d-flex justify-content-between">
                    <a href="/admin/post/{{$item->id}}" class="btn btn-primary"><i class="fa fa fa-info-circle "></i></a>
                    <a href="/admin/post/{{$item->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <form action="/admin/post/{{$item->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
{{--        {{ $posts->links() }}--}}
    </div>

@stop

@section('js')
    <script>
        $(document).ready( function () {
        $('.datatable').DataTable();
        } );
    </script>


@stop
