<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CalculateCode;



Route::get('/', function() {
    return view('welcome');
})->middleware('cal');

//Route::View('/', 'welcome');

//Route::get('/user/{name}/{id}', function ($name) {
//    return $name;
//})->where('name','[A-Za-z]+')->where('id', 25);

//Route::get('/user/{name}/{id}', function (string $name, int $id) {
//    return $name;
//})->where(['name' => '[A-Za-z]+', 'id' => '[0-9]+']);

//Route::get('/user/{name}', function ($name) {
//    return $name;
//})->whereNumber('name');

//Route::get('/user/{categories}', function ($categories) {
//    return $categories;
//})->whereIn('categories', ['PHP', 'Python', 'Java', 'Laravel','javascript']);
//
//Route::get('/contact', function(){
//   return "<h1>Contact</h1>";
//})->name('contact.info');

//Route::get('/profile', function(){
//   return "<h1>Profile</h1>";
//});

Route::get('/', function() {
    return view('welcome');
})->middleware(CalculateCode::class);


Route::resource('categories', PhotoController::class);

Route::get('/', function (Request $request) {
   return dd($request);
});
