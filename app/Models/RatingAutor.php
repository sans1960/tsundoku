<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RatingAutor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'autor_id', 'rate'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }
}
