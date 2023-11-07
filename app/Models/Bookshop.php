<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;





class Bookshop extends Model implements Searchable
{
    use HasFactory;


    protected $fillable = ['nom', 'slug', 'qui_som', 'url', 'active', 'logo', 'latitud', 'longitud', 'zoom', 'user_id', 'image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function ratingbookshop(): HasMany
    {
        return $this->hasMany(RatingBookshop::class);
    }
    public function comentbookshop(): HasMany
    {
        return $this->hasMany(ComentBookshop::class)->whereNull('parent_id');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('bookshop', $this->slug);

        return new SearchResult(
            $this,
            $this->nom,
            $url
        );
    }
    public $searchableType = 'Llibreries';
}
