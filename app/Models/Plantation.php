<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tea;

class Plantation extends Model
{
    use HasFactory;

    // defines 1:n relationshit to tea
    public function tea()
    {
        return $this->belongsTo(Tea::class, 'tea_id');
    }
}
