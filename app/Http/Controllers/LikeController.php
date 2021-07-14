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

        // $likes = Review::with('user')->get();

        $likes = Review::find($id)->review_user()->get();
        dd(sizeof($likes));
        $review->update([ 'votes' => sizeof($likes)]);
        dd($review);
        $tea = Tea::findOrFail($review->tea_id);


        return redirect(action('TeaController@show', $tea->id));
    }
}




