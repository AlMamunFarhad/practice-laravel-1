<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequestController;
use Illuminate\Support\Facades\Validator;

class postsController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return  view('posts2/create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('posts2/create');
    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(PostRequestController $request)
//    {
//
//
//
////      $validateData =  $request->validate([
////            'title' => 'required|max:50',
////            'body' => 'required',
////        ]);
//
////        dd($validateData);
//
//        dd($request->validated());
//
//
//
//    }

    public function store(Request $request)
    {


      $inputs =  $request->all();
      $rules = [
          'title' => 'required|max:50',
          'body' => 'required'
      ];

        $message = [
            'required' => 'The :attribute field is required.',
        ];

               $validator = validator::make($inputs,$rules, $message)->validate();

//        $validator = validator::make($request->all(), [
//            'title' => 'required|max:50',
//            'body' => 'required',
//        ])->validate();


//         if ($validator->fails()){
////             dd($validator);
//             return redirect()->route('posts.store')->withErrors($validator)->withInput();
//         }



//     $validated =  $validator->validated();

         dd($validated);



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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
