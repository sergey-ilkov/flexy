<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ServiceCategory extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
    ];



    public function services(): BelongsToMany
    {

        // return $this->belongsToMany(Service::class);
        // return $this->belongsToMany(Service::class)->withPivot('rating');
        // return $this->belongsToMany(Service::class)->withPivot('rating')->orderBy('pivot_rating', 'desc');
        return $this->belongsToMany(Service::class)->withPivot('rating')->orderByPivot('rating', 'desc');
    }
}