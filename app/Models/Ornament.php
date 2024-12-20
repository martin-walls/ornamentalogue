<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ornament extends Model
{
    use HasFactory;

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function tree(): BelongsTo
    {
        return $this->belongsTo(Tree::class);
    }
}
