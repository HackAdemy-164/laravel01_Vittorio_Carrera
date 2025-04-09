<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/servizi" , function () {
    return view('servizi');
}); 

Route::get("/contattaci" , function () {
    return view('contattaci');
});