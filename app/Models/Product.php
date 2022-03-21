<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'content',
        'price',
        'image',
        'category'

    ];

    public function favorite(){
        $cid=auth()->guard('user')->user()!=null ? auth()->guard('user')->user():null;

        return $this->belongsTo(Favoris::class, 'id' ,'product_id' )->where('customer_id', $cid);

    }
    public function like(){
      
        return $this->favorite()->selectRaw('product_id, count(*) as count')->groupBy('product_id');

    }
}
