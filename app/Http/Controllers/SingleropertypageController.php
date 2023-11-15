<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Propery;
use Illuminate\Http\Request;

class SingleropertypageController extends Controller
{
    public function singleHome($propertyId)
    {

        $singleproperty = Propery::where('id', $propertyId)->first();
        $categoryId = $singleproperty->category_id;
        $category = Category::find($categoryId);

        return view('pages.single-property-1', compact('singleproperty' , 'category'));
    }
}
