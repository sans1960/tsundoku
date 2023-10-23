<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComentEditorial extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'editorial_id', 'parent_id', 'body'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function editorial(): BelongsTo
    {
        return $this->belongsTo(Editorial::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(ComentEditorial::class, 'parent_id');
    }
    public function denunciacomenteditorial(): HasMany
    {
        return $this->hasMany(DenunciaComentEditorial::class);
    }
}
