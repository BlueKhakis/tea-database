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

        $review_user = $review->review_user()->wherePivot('user_id', $user->id)->first();

        if (!$review_user)
        {

        $review->review_user()->attach($user);
            $status = 1;
        }
        else{
            $status = 0;
            $review->review_user()->detach($user);
        }
        $likes = $review->review_user()->count();
        Review::where('id', $id)->update([ 'votes' => $likes]);
        return ['likes' => $likes, 'status' => $status];
        


    }
}




