@csrf

{{--name--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
    </div>
    <input type="text" value="{{old('name', $category->name ?? '')}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name">
</div>
{{--slug--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Slug</span>
    </div>
    <input type="text" class="form-control " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="slug" value="{{old('slug', $category->slug ?? '')}}">
</div>
{{--File--}}
    @if(isset($category->img))
        <img src="{{$category->img}}" alt="" style="width: 150px">
    @endif
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text small" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
        <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
    </div>
</div>

{{--<div >--}}

{{--        <label for="description">Description</label>--}}
{{--        <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>--}}

{{--    <textarea name="description" id="description"  class="form-control"></textarea>--}}
{{--</div>--}}

{{--<div class="input-group">--}}
{{--   <span class="input-group-btn">--}}
{{--     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">--}}
{{--       <i class="fa fa-picture-o"></i> Choose--}}
{{--     </a>--}}
{{--   </span>--}}
{{--    <input id="thumbnail" class="form-control" type="text" name="filepath">--}}
{{--</div>--}}
{{--<div id="holder" style="margin-top:15px;max-height:100px;"></div>--}}


<button type="submit" class="btn btn-dark">Save</button>
