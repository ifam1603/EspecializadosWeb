<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\categories;

class Product extends Model
{
    use HasFactory;

    public function categories(): BelongsTo
    {
        return $this->belongsTo(categories::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
