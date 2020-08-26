<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'img', 'description', 'price', 'recommended', 'category_id',
    ];
    public function category()
    {
     return $this->belongsTo(\App\Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(\App\Review::class);
    }

    public function users()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function getImgAttribute($value)
    {
        return $value ? $value : asset('/images/noimage.png');
    }

    public function setImgAttribute($img)
    {
        $fName = $img->getClientOriginalName();
        $path = public_path('/images/uploads/product/');
        $img->move($path, $fName);
        $this->attributes['img'] = '/images/uploads/product/' . $fName;
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value ? $value : $this->name, '-');
    }


}
