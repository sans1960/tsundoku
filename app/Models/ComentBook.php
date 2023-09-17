<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ComentBook extends Model
{
    use HasFactory;

    
    
    protected $fillable = ['user_id', 'book_id', 'parent_id', 'body'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }
    public function replies(){
        return $this->hasMany(ComentBook::class,'parent_id');
    }
}
