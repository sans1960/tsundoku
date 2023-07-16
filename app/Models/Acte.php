<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Acte extends Model
{
    use HasFactory;
    use Rateable;

    protected $fillable = ['titol','slug','user_id','body','image','hora','data','active','url'];


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
