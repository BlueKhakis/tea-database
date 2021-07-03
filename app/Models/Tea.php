<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Style;
use App\Models\Plantation;
use App\Models\Type;

class Tea extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'fair_trade'
    ];

    // defines 1:n relationshit to brands
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // defines 1:n relationshit to countries
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    // defines n:1 relationshit to styles
    public function style()
    {
        return $this->hasMany(Style::class, 'style_id');
    }

    // defines n:1 relationshit to plantations
    public function plantation()
    {
        return $this->hasMany(Plantation::class, 'plantation_id');
    }

    // defines n:1 relationshit to types
    public function type()
    {
        return $this->hasMany(Type::class, 'type_id');
    }
}
