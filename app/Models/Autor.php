<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use willvincent\Rateable\Rateable;


class Autor extends Model
{
    use HasFactory;
    use Rateable;

    protected $fillable = ['autor_nom','slug','biopic','url_foto','active'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
      public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

}
