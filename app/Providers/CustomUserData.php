<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;



class CustomUserData extends ServiceProvider
{
    public function register(): void
    {
        //
    }
    public function boot(): void
    {
//                $user = new User('Farhad', 'farhadmikky@gmail.com');
//        View::share(['user' => $user]);

//        view()->composer(['dashboard', 'profile'], function ($view) {
//            $view->with('user', new User('Farhad', 'farhad@gmail.com'));
//        });
    }
}




?>
