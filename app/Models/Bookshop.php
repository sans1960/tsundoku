<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

use willvincent\Rateable\Rateable;


class Bookshop extends Model
{
    use HasFactory;
    use Rateable;
    
    protected $fillable = ['nom','slug','qui_som','url','active','ciutat','logo','latitud','longitud','zoom','user_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
