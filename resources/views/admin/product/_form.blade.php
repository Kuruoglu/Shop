{{--name--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name"
           value="{{old('name', $product->name ?? '')}}">
</div>
{{--slug--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Slug</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="slug"
           value="{{old('slug', $product->slug ?? '')}}">
</div>
{{--File--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text small" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
        <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
    </div>
</div>
{{--Price--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
           name="price" value="{{old('price', $product->price ?? '')}}">
</div>
{{--Recommended--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Recommended</span>
    </div>
    <select class="custom-select" id="inputGroupSelect01" name="recommended">
        @include('admin.product.partials._recommended')
    </select>
</div>
{{--Category--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Category</span>
    </div>
    <select class="custom-select" id="inputGroupSelect01" name="category_id">
        @foreach($categories as $item)
            <option value="{{$item->id}} "@if(isset($product)) @if($product->category_id == $item->id) selected @endif @endif>{{$item->name}}</option>
        @endforeach
    </select>
</div>
