<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable=['name','color','product_id','main_image_url'];
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
