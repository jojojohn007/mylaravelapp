<?php

namespace App\Providers;

use App\Views\Composer\UserComposer;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View ;
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
        //


        View::share('myname','jojo');

        View::composer('*',UserComposer::class,function($view){
            $data = 'jojo';
            $view->with('name',$data);
        });



    }
}
