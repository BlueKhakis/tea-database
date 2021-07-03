<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\List;
use App\Models\Review;


class User extends Authenticatable
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

    // defines n:1 relationship to lists
    public function list()
    {
        return $this->hasMany(List::class);
    }

    // defines 1:n relationship with review
    public function review()
    {
        return $this->belongsTo(Review::class, 'review_id');
    }
}
