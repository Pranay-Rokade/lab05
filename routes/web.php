<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return "Hello From RCOEM";
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::view('/contact', 'contact', [
    "name" => "Pranay"
]);
Route::get('/person/{name}', function($name){
    return "The name is $name.";
});
Route::get('/person/{name?}', function(?string $name = 'Pranay Rokade(DEFAULT)'){
    return "The name is $name.";
})->name('person');

