<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Editorial extends Model implements Searchable
{
    use HasFactory;


    protected $fillable = ['editorial_nom', 'slug', 'descripcio', 'url', 'active', 'logo', 'adreça', 'user_id', 'image'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function ratingeditorial(): HasMany
    {
        return $this->hasMany(RatingEdiorial::class);
    }
    public function comenteditorial(): HasMany
    {
        return $this->hasMany(ComentEditorial::class)->whereNull('parent_id');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('editorial', $this->slug);

        return new SearchResult(
            $this,
            $this->editorial_nom,
            $url
        );
    }
    public $searchableType = 'Editorials';
}
