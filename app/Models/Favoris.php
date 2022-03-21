<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes ;

class Favoris extends Model
{
    use HasFactory;
    protected $filliable=[
        'product_id',
        'customer_id'
    ];
    //protected $dates = ['deleted_at'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
