<?php

namespace App\Models;

use App\Models\Blogcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    public function BlogCategory()
    {
        return $this->belongsTo(Blogcategory::class);
    }
}