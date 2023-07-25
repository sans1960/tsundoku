<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class Editorial extends Model
{
    use HasFactory;
    use Rateable;
    
    protected $fillable = ['editorial_nom','slug','descripcio','url','active','logo','adreça','user_id'];
  

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

}
