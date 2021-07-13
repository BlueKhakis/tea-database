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
        $user_id = Auth::user()->id;
        $reviews = Review::where('tea_id', $id)->where('user_id', $user_id)->get();
        return $reviews;
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('review.edit', compact('review'));
    }

    
    public function update(Request $request, $id)
    {


        // works for updating with laravel
        // //edits and existing reviews text and rating
        // $review = Review::findOrFail($id);
        // $old_rating = $review->rating;
        // $review->update($request->all());

        // //updates average rating of the specific tea
        // $tea = Tea::findOrFail($review->tea_id);
        // $rating_count= Review::where('tea_id', $review->tea_id)->count();
        // $tea->average_rating = ($tea->average_rating * $rating_count - $old_rating + $request->rating)/($rating_count);
        // $tea->save();

        // return redirect(action('TeaController@show', $review->tea_id));
        // dd($request->text);

        //chage of review in react
        $review = Review::where('id', $request->id)->first();
        $old_rating = $review->rating;
        $review->update($request->all());

        // updating average rating for a tea in react
        $tea = Tea::findOrFail($review->tea_id);
        $rating_count= Review::where('tea_id', $review->tea_id)->count();
        $tea->average_rating = ($tea->average_rating * $rating_count - $old_rating + $request->rating)/($rating_count);
        $tea->save();
        Session::flash('status', 'Review updated');

        return redirect(action('TeaController@show', $tea->id));


    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $tea = Tea::findOrFail($review->tea_id);
        $review->delete();
        Session::flash('status', 'Review removed');
        return redirect(action('TeaController@show', $tea->id));
    }
}
