<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;

class Country extends Model
{
    use HasFactory;


    // defines n:1 relationship with tea
    public function tea()
    {
        return $this->hasMany(Tea::class, 'tea_id');
    }
}
