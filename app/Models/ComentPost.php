<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComentPost extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(ComentPost::class, 'parent_id');
    }
    public function denunciacomentpost(): HasMany
    {
        return $this->hasMany(DenunciaComentPost::class);
    }
}
