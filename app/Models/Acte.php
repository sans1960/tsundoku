<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Acte extends Model implements Searchable
{
    use HasFactory;


    protected $fillable = ['titol', 'slug', 'user_id', 'body', 'image', 'hora', 'data', 'active', 'url', 'lloc'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function ratingacte(): HasMany
    {
        return $this->hasMany(RatingActe::class);
    }
    public function comentacte(): HasMany
    {
        return $this->hasMany(ComentActe::class)->whereNull('parent_id');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('acte', $this->slug);

        return new SearchResult(
            $this,
            $this->titol,
            $url
        );
    }
    public $searchableType = 'Actes';
}
