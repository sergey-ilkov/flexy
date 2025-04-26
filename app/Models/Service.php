<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    //
    protected $fillable = [
        // 'service_category_id',
        'name',
        'icon',
        'interset',
        'term',
        'amount',
        'promo_code',
        'promo_discount',
        'vote_rating',
        'vote_count',
        'rating',
        'url',
        'license',
        'comp_name',
        'email',
        'address',
        'phone',
        'published',

    ];

    protected $casts = [
        'name' => 'string',
        'icon' => 'string',
        'interset' => 'double',
        'term' => 'integer',
        'amount' => 'integer',
        'promo_code' => 'string',
        'promo_discount' => 'integer',
        'vote_rating' => 'integer',
        'vote_count' => 'integer',
        'rating' => 'double',
        'url' => 'string',
        'license' => 'string',
        'comp_name' => 'string',
        'email' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'published' => 'boolean',
    ];

    public function serviceCategory(): BelongsTo
    {

        return $this->belongsTo(ServiceCategory::class);
    }



    public function histories(): HasMany
    {
        return $this->hasMany(History::class)->with('user', 'action');
    }

    public function userHistories(): HasMany
    {

        return $this->hasMany(History::class)->with('action');
    }
}