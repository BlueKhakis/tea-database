<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Tea;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LikeController extends Controller
{
    public function like($id)
    {
        $review = Review::findOrFail($id);

        $user = Auth::user();

        $review->review_user()->attach($user);
        $review->votes++;
        $tea = Tea::where('id', $review->tea_id);
dd ($tea);
        return redirect(action('TeaController@show', $tea->id));
    }
}


