<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CalculateCode;
use \Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\DashboardController;


//Route::get('/', function (){
//    return view('welcome');
//});


//Route::get('/', function() {
//    return view('welcome');
//})->middleware('cal');

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

//Route::get('/', function() {
//    return view('welcome');
//})->middleware(CalculateCode::class);

//Route::get('/', function (){
////    return response("Hello World", 200)->header('Content-Type', 'Abdullah')->header('Header-2', 'Al Mamun')->header('header-3', 'Farhad');
//
////    return response("Included many headers")->withHeaders([                "Content-Type" => "Abdullah",
////            "Header-2" => "Al Mamun",
////            "Header-3" => "Farhad"]
////    );
//
////    return view('welcome');
//
//
//
//
//});


Route::resource('categories', PhotoController::class);

//Route::get('/', function (Request $request) {
//   return dd($request);
//});

//Route::patch('/photo/{id}', [PhotoController::class, 'update']);
//Route::get('/photo/path', [PhotoController::class, 'the_path'])->name('photo.path');

//Route::get('/', function (Request $request) {
//  $data = $request->all();
////  return $data['status'];
//  dd($data);
//});
//Route::get('/', function (Request $request) {
////  $data = $request->collect();
//  $data = $request->input();
//  return $data['name'];
//});

//s
//Route::post('/colors', function (Request $request) {
////    $data = $request->input('colors.0.name');
//    return $request->input('colors.0.name');
//});

//    Route::get('/custom', function (Request $request) {
//
//        return $request->query('id');
//
//    });


//Route::post('/date', function (Request $request) {
//
////        $obj = $request->date(key: 'appointment', format: 'd-m-Y');
//
//        return $request->appointment;
//});


//Route::post('/form/custom', function (Request $request) {
////    $inputs = $request->except(['email', 'checkBox']);
//    $inputs = $request->only('email', 'checkBox');
//    return $inputs;
//});

//Route::post('/form/custom', function (Request $request) {
//
//if ($request->has('password')) {
//    return "Email is Present..........";
//}else{
//    return "false";
//}
//
//});
//Route::get('/data', function (Request $request) {
//
////    if ($request->hasAny('email', 'checkBox')) {
////    return "value is Present..........";
////}
//    if ($request->missing('email')) {
//    return "value is missing..........";
//}
//
//});
//Route::get('/data', function (Request $request) {
//
//$inputs = $request->mergeIfMissing(['email' => 'farhad@example.com']);
//
//dd($request->all());
//
//
//});


Route::post('/flash', function (Request $request) {
//    $request->route('home');
  return  back()->withInput();
});


//Route::middleware('cache.headers:public;max_age=86400;etag')->group(function () {
//    Route::get('/dashboard', function () {
//        return "<h1>DASHBOARD</h1>";
//    });
//    Route::get('/posts', function () {
//        return "POSTS";
//    });
//});
//Route::middleware('cache.headers:public;max_age=86400;etag')->group(function () {
//    Route::get('/dashboard', function () {
//        $user = "Al Mamun Farhad";
//        return response('DASHBOARD')->cookie('user', $user);
//    });
//    Route::get('/posts', function (Request $request) {
//        return "Welcome to Posts Page" . $request->cookie('user');
//    });
//});
//Route::middleware('cache.headers:private;no_cache')->group(function () {
//    Route::get('/dashboard', function () {
//        $user = "Al Mamun Farhad";
//        return response('DASHBOARD')->cookie('user', $user);
//    });
//    Route::get('/posts', function (Request $request) {
//        return "Welcome to Posts Page" . $request->cookie('user');
//    });
//});



Route::middleware('cache.headers:public;max_age=86400;etag')->group(function () {
    Route::get('/dashboard', function () {
        $user = "Al Mamun Farhad";
        $cookie = cookie('user', $user, 1);

//        return response('DASHBOARD')->cookie($cookie);
//        return response('DASHBOARD')->withoutCookie("visit");
        Cookie::expire('visit');
        return response('DASHBOARD');
    });
    Route::get('/posts', function (Request $request) {
        $cookie = cookie('visit', 1, 30);
        return response('POSTS')->cookie($cookie);
//        return "Welcome to Posts Page" . $request->cookie('user');
    });
});


Route::get('/home', function (){
    return view('welcome');
})->name('home');

Route::get('/login', function (){
     return redirect()->route('home');
});
Route::get('/data', function (Request $request){
     return $request->query('id');
})->name('data');

Route::get('/dashboard', function (){
    return redirect()->route('data', ['id' => 1]);
});


Route::get('/dashboard/index', [DashboardController::class, 'index']);

Route::get('/', function (){
    return redirect()->action([DashboardController::class, 'index'], ['id' => 1]);
});

Route::get('/external/website', function (){
    return redirect()->away('https://farhadsr.com');
});
