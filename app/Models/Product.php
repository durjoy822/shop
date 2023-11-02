<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function multipleImages()
    {
        return $this->hasMany(Imagegallery::class);
    }
}