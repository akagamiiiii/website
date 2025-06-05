<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/hello-world", fn() => view("hello_world"));
Route::get("/hello", fn() => view("hello", [
    "name" => "山田",
    "course" => "Laravel12"
]));


Route::get("/", fn() => view("index"));
Route::get("/curriculum", fn() => view("curriculum"));
