<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;
use App\Models\Country;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // defines 1:n relationship with tea    
    public function tea()
    {
        return $this->hasMany(Tea::class, 'tea_id');
    }
    
    //defines n:m relationship with country
    public function country()
    {
        return $this->belongsToMany(Country::class);
    }
}
