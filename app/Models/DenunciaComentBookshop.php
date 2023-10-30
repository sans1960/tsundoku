<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DenunciaComentBookshop extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'coment_bookshop_id', 'motiu'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function comentbookshop(): BelongsTo
    {
        return $this->belongsTo(ComentBookshop::class, 'coment_bookshop_id');
    }
}
