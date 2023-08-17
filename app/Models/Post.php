<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    /**
     * Create relationship to parent user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Render markdown content as HTML.
     */
    public function renderedContent(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::of($this->content)->markdown(['html_input' => 'strip']),
        );
    }
}
