<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
            'title',
            'content',
    ];    
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_news');
    }

}
