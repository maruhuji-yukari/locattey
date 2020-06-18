<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'product_name','product_describe','category_id','trade_flag','product_image1',
        'product_image2','product_image3','product_image4','product_image5','users_id'
    ];

    public function categories(){
        return $this->belongsTo('App\Models\Product','category_id');
    }
}
