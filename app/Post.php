<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
            'title', 'description', 'slug', 'img',
        ];
    public function getImgAttribute($value) {
        return $value ? $value : asset('/images/noimage.png');
    }

    public function setImgAttribute($img)
    {
        $fName = $img->getClientOriginalName();
        $img->move(public_path('/images/uploads/product'), $fName);
        $this->attributes['img'] = '/images/uploads/product/' . $fName;
    }

    public function setSlugAttribute($value)
    {
//        $this->attributes['slug'] = Str::slug(empty($value) ? $this->name : $value, '-') ;
        $this->attributes['slug'] = Str::slug( empty($value) ? $this->title : $value, '-');
    }
}
