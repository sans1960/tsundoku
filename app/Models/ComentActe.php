<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComentActe extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'acte_id', 'parent_id', 'body'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function acte(): BelongsTo
    {
        return $this->belongsTo(Acte::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(ComentActe::class, 'parent_id');
    }
    public function denunciacomentacte(): HasMany
    {
        return $this->hasMany(DenunciaComentActe::class);
    }
}
