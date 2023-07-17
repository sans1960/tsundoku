<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nickname',
        'avatar',
        'condicio',
        'type',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function book(){
        return $this->hasMany(Book::class);
    }
    public function autor(){
        return $this->hasMany(Autor::class);
    }
    public function editorial(){
        return $this->hasMany(Editorial::class);
    }
    public function bookshop(){
        return $this->hasMany(Bookshop::class);
    }
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function medi(){
        return $this->hasMany(Medi::class);
    }
    public function acte(){
        return $this->hasMany(Acte::class);
    }
   
   
  
}
