<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main (Request $request) {
        $categoryId = $request->category;
        $name = $request->name;
        $price = $request->price;

        $products = Product::query();

        if($categoryId) {
            $products = $products->where("category_id", "=", $categoryId);
        }

        if($name) {
            $products = $products->where("name", "=", $name);
        }

        if($price) {
            $products = $products->orderBy("price", $price);
        }

        $products = $products->get();
        $categories = Category::all();
        return view('index', compact('products', 'categories'));
    }
}
