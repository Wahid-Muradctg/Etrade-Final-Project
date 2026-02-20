<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'catagory_id',
        'brand_name',
        'model',
        'sku',
        'stock',
        'minstock',
        'stock_status',
        'price',
        'sale_price',
        'image',
        'gall_img',
        'published_status',
        'published_date'
    ];
}
