<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

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
            $yakiMenu = DB::table('menus')->where('id','1')->first(); 
            $view->with('yakiMenu',$yakiMenu);
          });
          view()->composer('*',function($view){
            $yakiMarket = DB::table('menus')->where('id','2')->first();
            $view->with('yakiMarket',$yakiMarket);
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
