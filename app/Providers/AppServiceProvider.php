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
            $yakiMenu = DB::table('menus')->where('menu_id','YK_MENU')->first(); 
            $view->with('yakiMenu',$yakiMenu);
          });
          view()->composer('*',function($view){
            $yakiMarket = DB::table('menus')->where('menu_id','YK_SM_MENU')->first();
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
