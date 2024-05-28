<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index(Request $request){
       return  session()->all();


//    return $request->session('name')->get('name');
//    return $request->session('name')->only(['_token']);

    }



    public function set(Request $request){

        $query = $request->query();
//         session($query);
//         session()->put($query);

//        session(['cars' => ['BMW', 'Mercedes', 'Farrari', 'Lexus']]);


        $cars = ['BMW', 'Mercedes', 'Farrari', 'Lexus'];
//        session()->push('cars','toyota');
        session(['cars' => collect($cars)]);

         return "<h1>session are set Farhad............</h1>";
    }

    public function delete(){

//        dd(session('cars'));

//       dd(session('cars'));

//        session()->forget('role');
//        session()->put('cars', array_diff(session()->get('cars'),['toyota']));

        $car = session('cars')->search('toyota');
        session('cars')->forget($car);
        return "<h1>Deleted Session user</h1>";
    }
}
