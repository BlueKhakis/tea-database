<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Catalogue;
use App\Models\Review;
use App\Models\Image;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var arra*/
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array*/
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     * @var array*/
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // defines 1:n relationship to lists
    public function list()
    {
        return $this->hasMany(Catalogue::class);
    }

    // defines 1:n relationship with review
    public function review()
    {
        return $this->belongsTo(Review::class, 'review_id');
    }

    public function user_review()
    {
        // return $this->belongsToMany(User::class);
        return $this->belongsToMany(Review::class, 'review_user', 'user_id', 'review_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
