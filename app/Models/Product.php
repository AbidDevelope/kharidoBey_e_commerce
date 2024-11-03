<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'brand_id',
        
        'title',
        'slug',
        'short_description',
        'long_description',
        
        'discount',
        'selling_price',
        'old_price',
        'compare_price',

        'is_featured',
        'sku',
        'barcode',
        'track_qty',
        'qty',
        
        'stock',
        'status',
    ];

    public function productImage() 
    {
        return $this->hasMany(ProductImage::class);
    }
}