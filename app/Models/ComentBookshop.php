<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComentBookshop extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'bookshop_id', 'parent_id', 'body'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function bookshop(): BelongsTo
    {
        return $this->belongsTo(Bookshop::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(ComentBookshop::class, 'parent_id');
    }
    public function denunciacomentbookshop(): HasMany
    {
        return $this->hasMany(DenunciaComentBookshop::class);
    }
}
