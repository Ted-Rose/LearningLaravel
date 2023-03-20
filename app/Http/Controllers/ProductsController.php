<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index (){
        $title = "Welcome to my first steps in Laravel!";
        $description = "Done by Tedis";

        return view("products.index", [
            "title" => $title
        ]);
    }

    public function show ($name, $id){
        $data = [
            "iphone" => "iPhone",
            "samsung" => "Samsung"
        ];

        return view("products.index", [
            // Adding nucleolus list operator with ??
            "products" => $data[$name] ?? "Product " . $name . " does not exist",
            "id" => $id
        ]);
    }
}