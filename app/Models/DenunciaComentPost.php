<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DenunciaComentPost extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'coment_post_id', 'motiu'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function comentpost(): BelongsTo
    {
        return $this->belongsTo(ComentPost::class, 'coment_post_id');
    }
}
