<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RatingBookshop extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'bookshop_id', 'rate'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookshop(): BelongsTo
    {
        return $this->belongsTo(Bookshop::class);
    }
}
