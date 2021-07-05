<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Tea;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('react.react');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $tea_id)
    {

        $tea = Tea::findOrFail($tea_id);
       
        $review = Review::create(
            [
            'text' => $request->text,
            'rating' => $request->rating,
            'user_id' => Auth::user()->id,
            'tea_id' => $tea->id
            ]);
            
            $rating_count= Review::where('tea_id', $tea_id)->count();
           
            $old_avg = $tea->average_rating;
            $new_rating = $request->rating;
            $new_avg = ($old_avg * $rating_count + $new_rating)/($rating_count + 1);
            $tea->average_rating = $new_avg;
            $tea->save();

            return redirect(action('TeaController@show', $tea->id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //edits and existing reviews text and rating
        $review = Review::findOrFail($id);
        $review->update($request->all());

        //updates average rating of the specific tea
        $tea = Tea::findOrFail($review->tea_id);
        $rating_count= Review::where('tea_id', $review->tea_id)->count();
        $tea->average_rating = ($tea->average_rating * $rating_count + $request->rating)/($rating_count + 1);
        $tea->save();

        return redirect(action('TeaController@show', $review->tea_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
