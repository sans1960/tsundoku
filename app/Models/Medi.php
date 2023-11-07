<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Medi extends Model implements Searchable
{
    use HasFactory;


    protected $fillable = ['titol', 'slug', 'user_id', 'body', 'image', 'data', 'active', 'url', 'tipus'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function ratingmedi(): HasMany
    {
        return $this->hasMany(RatingMedi::class);
    }
    public function comentarimedi()
    {
        return $this->hasMany(ComentMedi::class)->whereNull('parent_id');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('medi', $this->slug);

        return new SearchResult(
            $this,
            $this->titol,
            $url
        );
    }
    public $searchableType = 'Multimedia';
}
