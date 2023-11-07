<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Autor extends Model implements Searchable
{
    use HasFactory;


    protected $fillable = ['autor_nom', 'slug', 'biopic', 'url_foto', 'active', 'user_id', 'image', 'web', 'facebook', 'instagram', 'twitter', 'auto'];


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
    public function ratingautor(): HasMany
    {
        return $this->hasMany(RatingAutor::class);
    }
    public function comentautor(): HasMany
    {
        return $this->hasMany(ComentAutor::class)->whereNull('parent_id');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('autor', $this->slug);

        return new SearchResult(
            $this,
            $this->autor_nom,
            $url
        );
    }
    public $searchableType = 'Autors';
}
