<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $totalQty= Cart::count();
            $view->with('totalQty',$totalQty);
          });
          view()->composer('*',function($view){
            $cart= Cart::content();
            $view->with('cart',$cart);
          });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Backpack\Generators\GeneratorsServiceProvider');
        }
    }
}
