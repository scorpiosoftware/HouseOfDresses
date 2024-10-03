<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductView extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_id','collection_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function collection() {
        return $this->belongsTo(Collection::class);
    }
}
