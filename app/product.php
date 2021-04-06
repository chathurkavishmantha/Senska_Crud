<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name',
         'product_code',
         'product_description',
         'product_price',
         'product_img',

    ];
}
