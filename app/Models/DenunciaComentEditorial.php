<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DenunciaComentEditorial extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'coment_editorial_id', 'motiu'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function comenteditorial(): BelongsTo
    {
        return $this->belongsTo(ComentEditorial::class, 'coment_editorial_id');
    }
}
