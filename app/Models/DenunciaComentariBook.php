<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DenunciaComentariBook extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'coment_book_id', 'motiu'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function comentbook(): BelongsTo
    {
        return $this->belongsTo(ComentBook::class, 'coment_book_id');
    }
}
