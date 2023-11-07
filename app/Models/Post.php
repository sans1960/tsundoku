<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model implements Searchable
{
    use HasFactory;


    protected $fillable = ['titol', 'slug', 'user_id', 'body', 'image', 'data', 'active', 'font', 'url'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function ratingpost(): HasMany
    {
        return $this->hasMany(RatingPost::class);
    }
    public function comentaripost()
    {
        return $this->hasMany(ComentPost::class)->whereNull('parent_id');
    }
    public function getSearchResult(): SearchResult
    {
        $url = route('post', $this->slug);

        return new SearchResult(
            $this,
            $this->titol,
            $url
        );
    }
    public $searchableType = 'Notícies';
}
