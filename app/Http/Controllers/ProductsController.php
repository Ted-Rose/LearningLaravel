<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        // Prints the route of view prodcuts
        // If the route has been named using
        // ->name
        print_r(route("products"));

        return view("products.index");
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