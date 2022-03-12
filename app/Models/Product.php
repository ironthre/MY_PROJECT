<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $Fillable = [
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'org_price',
        'selling_price',
        'rate',
        'image',
        'images',
        'qty',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_descrip',
    ];

    public function categoryBelongs()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }

    public function images()
    {
        return $this->hasMany('App\Image', 'product_id');
    }
}
