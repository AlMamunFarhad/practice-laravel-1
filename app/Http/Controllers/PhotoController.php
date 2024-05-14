<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return "<h1>Updated Photo ". $id ."</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function the_path(Request $request){

//        if ($request->is('photo/path')) {
//            return "Photo Path #True";
//        }
//     if ($request->routeIs('photo.path')) {
//         return "<h1>The route name is #Photo.path</h1>";
//     }
//       return $request->host();
//       return $request->getHttpHost();
//       return $request->getSchemeAndHttpHost();

//   if($request->method()){
//       return "True";
//   }
//return $request->ip();
    }
}
