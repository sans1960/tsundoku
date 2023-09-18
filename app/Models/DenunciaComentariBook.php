<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DenunciaComentariBook extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'coment_book_id', 'motiu'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comentBook(){
        return $this->belongsTo(ComentBook::class);
    }

}
