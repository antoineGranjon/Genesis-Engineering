<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index($sortby) {
        $products = Product::all()->sortBy($sortby);
        return view('product.index', ['products' => $products]);
    }

    public function show(Product $product) {
        return view('product.show', ['product' => $product]);
    }

}