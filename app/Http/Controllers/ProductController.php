<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product ($id) {
        $product = Product::find($id);
        return view('show', compact('product'));
    }
}
