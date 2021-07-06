<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Tea;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    
    public function index()
    {
        return view('react.react');
    }

    public function create(Request $request, $tea_id)
    {
        $tea = Tea::findOrFail($tea_id);
       
        $rating_count= Review::where('tea_id', $tea_id)->count();

        $review = Review::create(
            [
            'text' => $request->text,
            'rating' => $request->rating,
            'user_id' => Auth::user()->id,
            'tea_id' => $tea->id
            ]);
            
           
        $old_avg = $tea->average_rating;
        $new_rating = $request->rating;
        $new_avg = ($old_avg * $rating_count + $new_rating)/($rating_count + 1);
        $tea->average_rating = $new_avg;
        $tea->save();

        return redirect(action('TeaController@show', $tea->id));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('review.edit', compact('review'));
    }

    
    public function update(Request $request, $id)
    {
        //edits and existing reviews text and rating
        $review = Review::findOrFail($id);
        $old_rating = $review->rating;
        $review->update($request->all());

        //updates average rating of the specific tea
        $tea = Tea::findOrFail($review->tea_id);
        $rating_count= Review::where('tea_id', $review->tea_id)->count();
        $tea->average_rating = ($tea->average_rating * $rating_count - $old_rating + $request->rating)/($rating_count);
        $tea->save();

        return redirect(action('TeaController@show', $review->tea_id));
    }

    public function destroy($id)
    {
        //
    }
}
