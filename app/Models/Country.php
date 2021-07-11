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

    // defines 1:m relationship with region
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
