<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category_name',
    ];

    public function product(){
        return $this->hasMany('App\Models\Categories');
    }



}
