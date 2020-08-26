<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'img',
    ];

    public function product()
    {
        return $this->hasMany(\App\Product::class);
    }

    public function getImgAttribute($value)
    {
        //$value -содержит данные из БД
        return $value ? $value : asset('/images/noimage.png');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug( empty($value) ? $this->name : $value, '-');
    }

    public function setImgAttribute($img)
{
    $fName = $img->getClientOriginalName(); // название файла
    $img->move(public_path('images/uploads'), $fName);
    $this->attributes['img'] = '/images/uploads/' . $fName;
}


}
