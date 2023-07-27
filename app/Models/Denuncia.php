<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Denuncia extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','comment_id','motiu','data','data_comentari','objecte_comentari','nickname_comentari','comentari'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
