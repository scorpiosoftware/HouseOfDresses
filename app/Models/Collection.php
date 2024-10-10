<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable =['name_en','name_ar','image_url'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function cateogries()
    {
        return $this->belongsToMany(Category::class);
    }
}
