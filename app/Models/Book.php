<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Book extends Model
{
    use HasFactory;
    use Rateable;
    
    
    
    protected $fillable = ['titol','slug','editorial_id', 'autor_id','autor_nom','genere_id','editorial_nom','isbn','imatge','sinopsi','editorial_web','idioma','user_id','active'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function genere(){
        return $this->belongsTo(Genere::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function autor(){
        return $this->belongsTo(Autor::class);
    }
    public function editorial(){
        return $this->belongsTo(Editorial::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
 
   


}
