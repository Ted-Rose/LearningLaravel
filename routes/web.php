<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;



Route::get("/products", 
    [ProductsController::class, "index"])->name("products");

// Pattern is integer
/* Route::get("/products/{id}", 
    [ProductsController::class, "show"])->where("id", "[0-9]+"); */

// Pattern is string and integer
Route::get("/products/{name}/{id}", 
    [ProductsController::class, "show"])->
    where([
        "name" => "[a-z]+",
        "id" => "[0-9]+"
    ]);