<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Book extends Model
{
    use HasFactory;




    protected $fillable = ['titol', 'slug', 'editorial_id', 'autor_id', 'autor_nom', 'genere_id', 'editorial_nom', 'isbn', 'imatge', 'sinopsi', 'editorial_web', 'idioma', 'user_id', 'active', 'foto', 'novetat', 'primera', 'auto', 'cita', 'comentari'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function genere(): BelongsTo
    {
        return $this->belongsTo(Genere::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function ratingbook(): HasMany
    {
        return $this->hasMany(RatingBook::class);
    }





    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }
    public function comentbook()
    {
        return $this->hasMany(ComentBook::class)->whereNull('parent_id');
    }
}
