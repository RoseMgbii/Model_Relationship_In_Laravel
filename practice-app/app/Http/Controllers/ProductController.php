<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request) {
        logger($request);

//        $product = new Product;
//        $product->name = $request->name;
//        $product->amount = $request->amount;
//        $product->description = $request->description;
//        $product->size = $request->size;
//        $product->color = $request->color;
//        $product->save();

        //OR

        $product = Product::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'size' => $request->size,
            'color' => $request->color,
        ]);


        return $product;
    }
}
