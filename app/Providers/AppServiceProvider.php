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
            $aboutSrc  = config('filesystems.disks.about.simple_path');
            $view->with('aboutSrc', $aboutSrc);
        });

        view()->composer('*', function($view){
            $otherSrc  = config('filesystems.disks.other.simple_path');
            $view->with('other', $otherSrc);
        });

        view()->composer('*', function($view){
            $yakiBgHeader = DB::table('parameters')->where('param_id','YK_BG_HEADER')->first();

            $yakiBgHeaderImg = '';

            if(null == $yakiBgHeader)
            {
                $yakiBgHeaderImg = config('filesystems.disks.image.simple_path'). '/yaki-background.jpg';
            }
            else
            {
                $yakiBgHeaderImg = config('filesystems.disks.wbg.simple_path') . '/' . $yakiBgHeader->content;
            }

            $view->with('yakiBgHeaderImg', $yakiBgHeaderImg);
        });

        view()->composer('*', function($view){
            $yakiBgFooter = DB::table('parameters')->where('param_id','YK_BG_FOOTER')->first();

            $yakiBgFooterImg = '';

            if(null == $yakiBgFooter)
            {
                $yakiBgFooterImg = config('filesystems.disks.image.simple_path'). '/yaki-background-01.jpg';
            }
            else
            {
                $yakiBgFooterImg = config('filesystems.disks.wbg.simple_path') . '/' . $yakiBgFooter->content;
            }

            $view->with('yakiBgFooterImg', $yakiBgFooterImg);
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
