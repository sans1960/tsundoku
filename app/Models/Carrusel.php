<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carrusel extends Model
{
    use HasFactory;
    protected $fillable = ['titol', 'subtitol', 'tema', 'actiu', 'posicio'];
    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
