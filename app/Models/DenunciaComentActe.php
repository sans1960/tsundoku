<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DenunciaComentActe extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'coment_acte_id', 'motiu'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function comentacte(): BelongsTo
    {
        return $this->belongsTo(ComentActe::class, 'coment_acte_id');
    }
}
