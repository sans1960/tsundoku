<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComentAutor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'autor_id', 'parent_id', 'body'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(ComentAutor::class, 'parent_id');
    }
    public function denunciacomentautor(): HasMany
    {
        return $this->hasMany(DenunciaComentAutor::class);
    }
}
