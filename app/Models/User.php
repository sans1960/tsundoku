<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Cog\Contracts\Ban\Bannable as BannableInterface;
use Cog\Laravel\Ban\Traits\Bannable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cmgmyr\Messenger\Traits\Messagable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable implements BannableInterface
{
    use HasApiTokens, HasFactory, Notifiable;
    use Bannable;
    use Messagable;

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
        'banned_at',
        'novetats',
        'biopic',

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
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
    public function ratingbook(): HasMany
    {
        return $this->hasMany(RatingBook::class);
    }
    public function ratingautor(): HasMany
    {
        return $this->hasMany(RatingAutor::class);
    }
    public function ratingeditorial(): HasMany
    {
        return $this->hasMany(RatingEdiorial::class);
    }
    public function ratingbookshop(): HasMany
    {
        return $this->hasMany(RatingBookshop::class);
    }
    public function ratingpost(): HasMany
    {
        return $this->hasMany(RatingPost::class);
    }
    public function ratingmedi(): HasMany
    {
        return $this->hasMany(RatingMedi::class);
    }
    public function ratingacte(): HasMany
    {
        return $this->hasMany(RatingActe::class);
    }
    public function autor(): HasMany
    {
        return $this->hasMany(Autor::class);
    }
    public function editorial(): HasMany
    {
        return $this->hasMany(Editorial::class);
    }
    public function bookshop(): HasMany
    {
        return $this->hasMany(Bookshop::class);
    }
    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    public function medi(): HasMany
    {
        return $this->hasMany(Medi::class);
    }
    public function acte(): HasMany
    {
        return $this->hasMany(Acte::class);
    }
    public function comentbook(): HasMany
    {
        return $this->hasMany(ComentBook::class)->whereNull('parent_id');
    }
    public function comentautor(): HasMany
    {
        return $this->hasMany(ComentAutor::class)->whereNull('parent_id');
    }
    public function comenteditorial(): HasMany
    {
        return $this->hasMany(ComentEditorial::class)->whereNull('parent_id');
    }
    public function comentbookshop(): HasMany
    {
        return $this->hasMany(ComentBookshop::class)->whereNull('parent_id');
    }
    public function comentpost()
    {
        return $this->hasMany(ComentPost::class)->whereNull('parent_id');
    }
    public function comentmedi()
    {
        return $this->hasMany(ComentMedi::class)->whereNull('parent_id');
    }
    public function comentacte(): HasMany
    {
        return $this->hasMany(ComentActe::class)->whereNull('parent_id');
    }
    public function denunciacomentbook(): HasMany
    {
        return $this->hasMany(DenunciaComentBook::class);
    }
    public function denunciacomentautor(): HasMany
    {
        return $this->hasMany(DenunciaComentAutor::class);
    }
    public function denunciacomenteditorial(): HasMany
    {
        return $this->hasMany(DenunciaComentEditorial::class);
    }
    public function denunciacomentbookshop(): HasMany
    {
        return $this->hasMany(DenunciaComentBookshop::class);
    }
    public function denunciacomentpost(): HasMany
    {
        return $this->hasMany(DenunciaComentPost::class);
    }
    public function denunciacomentmedi(): HasMany
    {
        return $this->hasMany(DenunciaComentMedi::class);
    }
    public function denunciacomentacte(): HasMany
    {
        return $this->hasMany(DenunciaComentActe::class);
    }
}
