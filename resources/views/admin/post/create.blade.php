@extends('adminlte::page')

@section('title', 'Create post')
@section('content_header')
    <h1>Create Post</h1>
@stop


@section('content')
    @include('admin._messages')
   <div class="container">
       <form action="/admin/post" method="post" enctype="multipart/form-data" class="form-group">
           @csrf
          @include('admin.post._form')
           <button type="submit" class="btn btn-dark mt-1">Create</button>

       </form>
   </div>
@stop
