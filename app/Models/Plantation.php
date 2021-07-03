<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;
use App\Models\Country;

class Plantation extends Model
{
    use HasFactory;

    // defines 1:n relationship with tea
    public function tea()
    {
        return $this->hasMany(Tea::class, 'tea_id');
    }

    // defines n:1 relationship with country
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
