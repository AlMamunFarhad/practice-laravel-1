<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posts2Controller extends Controller
{
    public function index(Request $request){

     $recordCreated = false; 
     $componentName = null;

     if ($recordCreated){
       $componentName = "success";
     }else{
         $componentName = "error";
     }


        return view('posts.index2', compact('componentName'));
    }
}
