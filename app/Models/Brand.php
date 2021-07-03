<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;

class Brand extends Model
{
    use HasFactory;

    public function tea()
    {
        return $this->belongsToMany(Tea::class, 'tea_id');
    }
}
