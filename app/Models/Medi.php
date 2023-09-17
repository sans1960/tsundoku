<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Medi extends Model
{
    use HasFactory;
    use Rateable;

    protected $fillable = ['titol','slug','user_id','body','image','data','active','url','tipus'];


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


}
