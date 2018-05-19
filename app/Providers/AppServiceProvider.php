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
        view()->composer('*', function($view){
            $yakiMenu = DB::table('menus')->where('menu_id','YK_MENU')->first(); 
            $view->with('yakiMenu', $yakiMenu);
        });

        view()->composer('*', function($view){
            $yakiMarket = DB::table('menus')->where('menu_id','YK_SM_MENU')->first();
            $view->with('yakiMarket', $yakiMarket);
        });

        view()->composer('*', function($view){
            $imgSrc  = config('filesystems.disks.image.simple_path');
            $view->with('imgSrc', $imgSrc);
        });

        view()->composer('*', function($view){
            $prSrc  = config('filesystems.disks.products.simple_path');
            $view->with('prSrc', $prSrc);
        });

        view()->composer('*', function($view){
            $imgSrc  = config('filesystems.disks.about.simple_path');
            $view->with('aboutSrc', $aboutSrc);
        });

        view()->composer('*', function($view){
            $imgSrc  = config('filesystems.disks.wbg.simple_path');
            $view->with('bgSrc', $bgSrc);
        });

        view()->composer('*', function($view){
            $imgSrc  = config('filesystems.disks.other.simple_path');
            $view->with('other', $other);
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
