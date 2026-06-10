<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'category',
        'excerpt',
        'body',
        'image_path',
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Used by BlogPageController
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}

