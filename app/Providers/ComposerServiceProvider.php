<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composer\UserViewComposer;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
     view()->composer(['profile','dashboard'], UserViewComposer::class);

//        view()->composer(['dashboard', 'profile'], function ($view) {
//            $view->with('user', new User('Farhad', 'farhad@gmail.com'));
//        });
    }
}
