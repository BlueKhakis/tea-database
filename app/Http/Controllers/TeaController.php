<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Brand;
use App\Models\Catalogue;
use App\Models\Country;
use App\Models\Plantation;
use App\Models\Type;
use App\Models\Review;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class TeaController extends Controller
{
    public function index()
    {
        $teas = Tea::paginate(6);
        return view('teas.all', compact('teas'));
    }

    public function top()
    {
        $teas = Tea::orderBy('average_rating', 'desc')->get();
        return view('teas.top', compact('teas'));
    }

    public function create()
    {
        $types = Type::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();

        return view('teas.create', compact('types', 'countries', 'brands'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type_id' => 'required',
            'brand' => 'required',
            'country_id' => 'required'
        ]);

        $all_brands = Brand::all();
        $test = 'no';

        foreach($all_brands as $brand)
        {
            if ($brand->name === $request->brand)
            {
                $test = 'yes';
            }
        }
// dd($request->description);
        if ($test==='yes')
        {
            $brand = Brand::where('name', $request->brand)->get();
            $brand = $brand[0];
        } else {
            $brand = Brand::create(
                ['name' => $request->brand]);
        }
    
            $tea = Tea::create(
                [
                'name' => $request->name,
                'type_id' => $request->type_id,
                'country_id' => $request->country_id,
                'description' => $request->description,
                'brand_id' => $brand->id,
                ]);



        Session::flash('status', 'Thank you for enriching the database');
        return redirect(action('TeaController@show', $tea));
    }

    public function show($id)
    {
        $tea = Tea::findOrFail($id);
        $reviews = Review::where('tea_id', $id)->get();
        Auth::user() ? $user_reviews = Review::where('tea_id', $id)->where('user_id', Auth::user()->id)->get() :
                    $user_reviews = [];
        $country = Country::where('id', $tea->country_id)->get();
        $type = Type::where('id', $tea->type_id)->get();

        $number_of_votes = sizeof($reviews);
        
        $catalogues = Catalogue::all();

        // if (  )
        //     Session::flash('status', 'Thank you for honest review');
        // else
        //     Session::flash('status', 'Something is missing, give a try again');

        return view('teas.show', compact('tea', 'reviews', 'catalogues', 'country', 'user_reviews', 'number_of_votes', 'type'));
    }

    public function edit($id)
    {
        //
    }

    public function teaToList(Request $request, $id)
    {
        $catalogue = Catalogue::findOrFail($request->catalogue_id);
        
        $tea = Tea::findOrFail($request->id);
        
        if($catalogue->tea->contains($tea)){
            // dd('B1');
            Session::flash('status', "tea already there");
            return redirect(action('TeaController@show', $tea->id));
        }
        // dd('B2');
        $catalogue->tea()->attach($tea);
        Session::flash('status', "Tea successfully added");
        return redirect(action('TeaController@show', $tea->id));
    }

    
    public function update(Request $request, $id)
    {
        $catalogue = Catalogue::findOrFail($id);
        $catalogue->update($request->all());
    }

    public function destroy($id)
    {
        //
    }

    public function storeImage(Request $request, $id)
    {
        if($request->file('image'))
        {
            $image_file = $request->file('image');  
            $image_file->storeAs('',$image_file->getClientOriginalName(), 'uploads');
            $tea = Tea::findOrFail($id);
            $tea->image = 'users/'.$image_file->getClientOriginalName();
            $tea->save();
        }
        // return redirect()->back()->with('status', 'Thank you for uploading the image');
        return redirect(action('TeaController@show', $id));
    }
}
