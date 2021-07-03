<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;
use App\Models\Type;

class Style extends Model
{
    use HasFactory;

    // defines 1:n relationshit to tea
    public function tea() 
    {
        return $this->hasMany(Tea::class, 'tea_id');
    }

    //defines n:m relationship with type
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
