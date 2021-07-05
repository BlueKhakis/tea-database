<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;
use App\Models\User;

class Review extends Model
{
    use HasFactory;

    protected $fillable =
    ['text',
    'rating',
    'tea_id',
    'user_id'];

    // defines n:1 relationship with tea
    public function tea()
    {
        return $this->belongsTo(Tea::class, 'tea_id');
    }

    // defines n:1 relationship with user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
