<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Route::resourceVerbs([
//            'create' => 'farhad',
//            'edit' => 'mikky',
//        ]);

//        $user = new User('Farhad', 'farhadmikky@gmail.com');
//        View::share(['user' => $user]);
    }
}


