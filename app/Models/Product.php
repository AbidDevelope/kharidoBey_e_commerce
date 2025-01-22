<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductImage;
use App\Models\Brand;
use App\Models\Category;

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

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function subcategories()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
}