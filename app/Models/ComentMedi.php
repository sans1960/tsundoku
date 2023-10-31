<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComentMedi extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'medi_id', 'parent_id', 'body'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function medi(): BelongsTo
    {
        return $this->belongsTo(Medi::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(ComentMedi::class, 'parent_id');
    }
    public function denunciacomentmedi(): HasMany
    {
        return $this->hasMany(DenunciaComentMedi::class);
    }
}
