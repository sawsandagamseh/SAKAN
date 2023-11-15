<?php

namespace App\Http\Controllers;
use App\Models\Propery;
use App\Models\Category;

use Illuminate\Http\Request;

class AllropertypageController extends Controller
{
   
    
    public function familyHome($categoryId){

        $allproperties = Propery::where('category_id', $categoryId)->paginate(9);
        $allcats = Category::all();
       
        return view('pages.properties-full-grid-2', compact('allproperties','allcats')); 

    }


    public function populler_places($area_name){

        $allproperties = Propery::where('area_name', $area_name)->get();
        return view('pages.properties-full-grid-2', compact('allproperties')); 

    }



}
