<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function apropos()
    {
        return view('pages.apropos');
    }

    public function services()
    {
        // $produits = DB::table("products")->inRandomOrder()->limit(1)->get();

        $produits = Product::orderBy("product_name", "asc")->paginate(2);

        return view('pages.services')->with('produits', $produits);

    }

    public function show($id){
        // $produit = DB::table('products')
        //             ->where('id',$id)
        //             ->first();


        $produit = Product::where('id',$id)->first();
        return view('pages.show')->with('produit', $produit);
    }
}
