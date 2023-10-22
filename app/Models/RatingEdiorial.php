<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RatingEdiorial extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'editorial_id', 'rate'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function editorial(): BelongsTo
    {
        return $this->belongsTo(Editorial::class);
    }
}
