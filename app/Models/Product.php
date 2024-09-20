<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name_en',
        'name_ar',
        'price',
        'price2',
        'offer_price',
        'description_en',
        'description_ar',
        'stock_quantity',
        'minimum_quantity',
        'maximum_quantity',
        'main_image_url',
        'status',
        'brand_id',
        'collection_id',
    ];
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function colors()
    {
        return $this->hasMany(Color::class);
    }
    public function comments()
    {
        return $this->hasMany(ProductComments::class);
    }

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }
    public function sizes() : BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'product_size', 'product_id', 'size_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function items() : BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}
