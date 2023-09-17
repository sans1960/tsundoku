<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


use willvincent\Rateable\Rateable;


class Bookshop extends Model
{
    use HasFactory;
    use Rateable;
    
    protected $fillable = ['nom','slug','qui_som','url','active','logo','latitud','longitud','zoom','user_id','image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
 
}
