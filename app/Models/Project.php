<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Vite;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'socials' => AsCollection::class,
        'featured' => 'boolean',
        'visible' => 'boolean',
    ];

    /**
     * Define accessor for the project's domain name.
     */
    public function domainName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => parse_url($attributes['url'], PHP_URL_HOST)
        );
    }

    /**
     * Define accessor for the project's image URL.
     */
    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => $attributes['image']
                ? asset('storage/'.$attributes['image'])
                : Vite::asset('resources/img/post-banner-default.png')
        );
    }
}
