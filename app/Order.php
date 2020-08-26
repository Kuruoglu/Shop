<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Order extends Model
{
   protected $fillable = [
       'total_sum', 'city', 'post_office', 'phone', 'user_id'
   ];

    public function orderItem()
    {
        return $this->hasMany(\App\OrderItem::class);
   }
}
