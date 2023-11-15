<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Propery;
use Illuminate\Support\Facades\DB; // Import the DB facade


use Illuminate\Http\Request;


class HomepageController extends Controller
{


  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcats = Category::all();


        $topAreaNames = DB::table('properies')
        ->select('area_name', DB::raw('count(*) as count'))
        ->groupBy('area_name')
        ->orderBy('count', 'desc')
        ->take(8)
        ->get();

    // dd($topAreaNames);



        return view('pages.index', compact('allcats', 'topAreaNames')); 
    }

    public function searchProperties(Request $request)
    {
        // Retrieve input parameters from the request
        $cat_id = $request->input('category_id');
        $city = $request->input('city');
        $minarea = $request->input('area-size-min');
        $maxarea = $request->input('area-size-max');
        $minprice = $request->input('price-min');
        $maxprice = $request->input('price-max');
        $room = $request->input('roomeNumber');
        $bath = $request->input('bathNumber');
    
        // Initialize the query
        $query = DB::table('properies');
    
        // Add conditions based on non-zero values
        if ($cat_id != 0) {
            $query->where('category_id', $cat_id);
        }
    
        if (!empty($city)) {
            $query->where('city', $city);
        }
    
        // if ($minarea != 0 && $maxarea != 0) {
        //     $query->whereBetween('home_area', [$minarea, $maxarea]);
        // }
    
        if ($maxprice != 0) {
            $query->whereBetween('price', [$minprice, $maxprice]);
        }
    
        if ($bath != 0) {
            $query->whereBetween('bath_number', [$bath - 2, $bath + 2]);
        }
    
        if ($room != 0) {
            $query->whereBetween('room_number', [$room - 2, $room + 2]);
        }
    
        // Execute the query with pagination
        $allproperties = $query->paginate(6);
        $allcats = Category::all();
        $specifiCat = Category::find( $cat_id);
        
    
        // Return or use $allproperties as needed
    
    return view('pages.properties-full-grid-2', compact('allproperties', 'allcats', 'request', 'specifiCat'));
    }
    


    // public function findPopularPlacesByArea()
    // {
    //     // Count the number of properties in each 'area_name'
    //     $areaCounts = Propery::select('area_name', DB::raw('count(*) as count'))
    //         ->groupBy('area_name')
    //         ->orderBy('count', 'desc')
    //         ->limit(8)
    //         ->get();
    
    //     // Fetch the properties for the most popular 'area_name' values
    //     $result = collect();
    
    //     foreach ($areaCounts as $areaCount) {
    //         $areaPlaces = Propery::where('area_name', $areaCount->area_name)->get();
    //         $result = $result->concat($areaPlaces);
    //     }

    //     dd($result);
    
    //     return view('popular-places', compact('result'));
    // }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }



}
