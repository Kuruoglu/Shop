<div>
    <label for="title" >Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title??'')}}">
</div>
@if (isset($post))
 <img src="{{$post->img ?  $post->img : '/images/noimage.png'}}" alt="{{$post->title}}">

@endif

<div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
    <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
</div>
<div>
    <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $post->slug??'')}}">
</div>
<label for="slug">Description</label>
<div>
    <textarea name="description" id="description" class="form-control">{{old('description', $post->description??'')}}</textarea>
</div>
