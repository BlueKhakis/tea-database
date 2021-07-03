<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Region extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsToMany(Country::class);
    }
}
