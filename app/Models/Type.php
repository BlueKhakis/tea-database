<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;
use App\Models\Style;


class Type extends Model
{
    use HasFactory;

    // defines 1:n relationship with tea
    public function tea()
    {
        return $this->hasMany(Tea::class);
    }

    // defines 1:n relationship with style
    public function style()
    {
        return $this->hasMany(Style::class);
    }
}
