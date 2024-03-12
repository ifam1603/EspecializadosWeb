<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\Product;

class APIEcommerceController extends Controller
{
    public function products()
    {   
        $products = Product::with("categories")->get();
        return response()->json($products);
    }

    public function products_dt()
    {   
        $products = Product::with("categories")->get();
        return response()->json(["data" => $products]);
    }


    public function filterProductsByCategory(Request $request)
{
    $categoryId = $request->input('categories_id');
    $products = Product::whereHas('categories', function($query) use ($categoryId) {
        $query->where('id', $categoryId);
    })->get();
    return response()->json($products);
}

}
