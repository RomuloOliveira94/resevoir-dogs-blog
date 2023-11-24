<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'title',
        'slug',
        'deck',
    ];

    protected $casts = [
        'deck' => 'array'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    protected function deck(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
}
