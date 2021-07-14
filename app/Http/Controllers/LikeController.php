<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($id)
    {
        $review = Review::findOrFail($id);
        $user = Auth::user();

        $review->review_user()->attach($user);
        $review->votes++;

        $tea = Tea::where('id', $review->tea_id);
        return redirect(action('TeaController@show', $tea->id));
    }
}


$catalogue->tea()->attach($tea);