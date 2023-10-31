<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RatingMedi extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'medi_id', 'rate'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function medi(): BelongsTo
    {
        return $this->belongsTo(Medi::class);
    }
}
