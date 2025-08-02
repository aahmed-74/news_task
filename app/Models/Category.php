<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    
   public function news()
    {
        return $this->belongsToMany(News::class, 'category_news');
    }
}

