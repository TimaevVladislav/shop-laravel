<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main () {
        $products = Category::all();
        return view('admin/index', compact("products"));
    }

    public function createProduct () {
        $categories = Category::all();
        return view('admin/create', compact("categories"));
    }

    public function store (Request $request) {

        $imageName = time().".".$request->image->extension();

        $request->image->move(public_path("images"), $imageName);

        $product = new Product();$request->image->move(public_path("images"), $imageName);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = "/images/" . $imageName;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        $product->save();

        return redirect("admin/index");
    }
}
