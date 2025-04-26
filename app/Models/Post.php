<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'title',
        'slug',
        'description',
        'views',
        'image',
        'image_min',
        'body',
        'published',
    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'views' => 'integer',
        'image' => 'string',
        'image_min' => 'string',
        'body' => 'string',
        'published' => 'boolean',
    ];
}
