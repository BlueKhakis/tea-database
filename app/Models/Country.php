<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;
use App\Models\Plantation;
use App\Models\Region;

class Country extends Model
{
    use HasFactory;


    // defines n:1 relationship with tea
    public function tea()
    {
        return $this->belongsTo(Tea::class, 'tea_id');
    }

    // defines 1:n relationship with plantation
    public function plantation()
    {
        return $this->hasMany(Plantation::class, 'plantation_id');
    }

    // defines m:n relationship with region
    public function region()
    {
        return $this->belongsToMany(Region::class);
    }
}
