<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    //protected $primaryKey = 'id_product';
    protected $fillable = [
        'image',
        'name',
        'price',
        'detail',
        'id_type',
        'id_user'
    ];
}
