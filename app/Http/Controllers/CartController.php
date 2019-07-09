<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class CartController extends Controller
{
    public function add($id)
    {
      $product =  Product::find($id);
      $product = [
            'id' => $product->id,
            "name" => $product->name,
            'description' => $product->description,
            'genre' => $product->genre,
            'price' => $product->price,
            'image' => $product->imageLoc,
      ];

       session()->put("user.cart." . $id, $product);
       

       return view('cart');
    }

    function show(){
        return view('cart');

    }
    public function remove($id)
    {
        
        session()->pull('user.cart.' . $id, "default");
        return view('cart');
    }

}
