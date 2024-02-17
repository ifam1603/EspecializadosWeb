<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\categories;
class GroceriesController extends Controller
{
    public function index(){
        /*
        $Product = product::all();
        echo "<pre>";
        print_r($Product);
        echo "</pre>";
        die();
*/      $Product = product::all();
        echo "<pre>";
        print_r($Product);
        echo "<pre>";
        die();

        return view("groceries/index");
    }

    public function shop(){
        $products= product::all();
        $categories = categories::all();
        return view("groceries/shop",compact('products','categories'));
    }

    public function register(){
        return view("groceries/register");
    }

    public function login(){
        return view("groceries/login");
    }

    public function detail($id){
        // Aquí puedes utilizar $id para cargar el prssoducto correspondiente desde la base de datos
        $product = Product::where('id', $id)->first();

        if(!$product){
            abort(404,"jajaja");
        }
        // Devolver la vista de detalle del producto con el producto cargado
        return view('groceries.detail', ['product' => $product]);
    }

}
