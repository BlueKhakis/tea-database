<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tea;

class Catalogue extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'user_id'
    ];

    // defines n:1 relationship with user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // defines n:m relationship with tea
    public function tea()
    {
        return $this->belongsToMany(Tea::class);
    }
}
