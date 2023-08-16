<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * Create relationship to parent user.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Render markdown content as HTML.
     * 
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function renderedContent(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::of($this->content)->markdown(['html_input' => 'strip']),
        );
    }
}
