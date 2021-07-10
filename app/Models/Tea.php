<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Style;
use App\Models\Plantation;
use App\Models\Type;
use App\Models\Review;
use App\Models\Catalogue;


class Tea extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'type_id',
        'country_id',
        'brand_id',
        'plantation_id',
        'average_rating',
    ];

    // defines n:1 relationship to brands
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // defines 1:n relationship with countries
    public function country()
    {
        return $this->hasMany(Country::class, 'country_id');
    }

    // defines 1:n relationship with reviews
    public function review()
    {
        return $this->hasMany(Review::class, 'review_id');
    }

    // defines n:1 relationship with styles
    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id');
    }

    // defines n:1 relationship with types
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    // defines n:m relationship with catalogues
    public function catalogue()
    {
        return $this->belongsToMany(Catalogue::class);
    }
}
