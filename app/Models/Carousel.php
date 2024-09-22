<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $fillable = ['logo_url','category_id','title'];

    public function images()
    {
        return $this->hasMany(CarouselImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
