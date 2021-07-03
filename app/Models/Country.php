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
        return $this->hasMany(Tea::class, 'tea_id');
    }

    // defines 1:n relationshit to plantation
    public function plantation()
    {
        return $this->belongsTo(Plantation::class, 'tea_id');
    }

    public function region()
    {
        return $this->belongsToMany(Region::class);
    }
}
