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
        view()->composer('*', function($view) {
            $yakiMenu = DB::table('menus')->where('menu_id','YK_MENU')->first(); 
            $view->with('yakiMenu', $yakiMenu);
        });

        view()->composer('*', function($view) {
            $yakiBuffetBranches = DB::table('branches')->where('has_buffet_service','1')->orderBy('id')->get(); 
            $view->with('yakiBuffetBranches', $yakiBuffetBranches);
        });

        view()->composer('*', function($view) {
            $yakiMarket = DB::table('menus')->where('menu_id','YK_SM_MENU')->first();
            $view->with('yakiMarket', $yakiMarket);
        });

        view()->composer('*', function($view) {
            $imgSrc  = config('filesystems.disks.image.simple_path');
            $view->with('imgSrc', $imgSrc);
        });

        view()->composer('*', function($view) {
            $prSrc  = config('filesystems.disks.products.simple_path');
            $view->with('prSrc', $prSrc);
        });

        view()->composer('*', function($view) {
            $prSrc  = config('filesystems.disks.buffet_products.simple_path');
            $view->with('buffetPrSrc', $prSrc);
        });

        view()->composer('*', function($view) {
            $eventSrc  = config('filesystems.disks.events.simple_path');
            $view->with('eventSrc', $eventSrc);
        });

        view()->composer('*', function($view) {
            $aboutSrc  = config('filesystems.disks.about.simple_path');
            $view->with('aboutSrc', $aboutSrc);
        });

        view()->composer('*', function($view) {
            $otherSrc  = config('filesystems.disks.other.simple_path');
            $view->with('other', $otherSrc);
        });

        view()->composer('*', function($view) {

            $yakiBgHeader = null;
            $yakiBgHeaderImg = '';

            $yakiBgFooter = null;
            $yakiBgFooterImg = '';

            $yakiAboutParam = null;
            $yakiAboutImg = '';

            $yakiRecruitmentParam = null;
            $yakiRecruitmentImg = '';

            $yakiCategoryDisplayHome = null;

            $yakiMemberPolicy = null;

            $parameters = DB::table('parameters')->get();

            foreach ($parameters as $parameter)
            {
                if ($parameter->param_id == 'YK_BG_HEADER')
                {
                    $yakiBgHeader = $parameter;
                }
                elseif ($parameter->param_id == 'YK_BG_FOOTER')
                {
                    $yakiBgFooter = $parameter;
                }
                elseif ($parameter->param_id == 'YK_ABOUT_IMG')
                {
                    $yakiAboutParam = $parameter;
                }
                elseif ($parameter->param_id == 'YK_RECRUITMENT_IMG')
                {
                    $yakiRecruitmentParam = $parameter;
                }
                elseif ($parameter->param_id == 'YK_CAT_DISP_HOME')
                {
                    $yakiCategoryDisplayHome = $parameter;
                }
                elseif ($parameter->param_id == 'YK_MEMBER_POLICY')
                {
                    $yakiMemberPolicy = $parameter;
                }
            }

            // image header
            if(null == $yakiBgHeader)
            {
                $yakiBgHeaderImg = config('filesystems.disks.image.simple_path'). '/yaki-background.jpg';
            }
            else
            {
                $yakiBgHeaderImg = config('filesystems.disks.wbg.simple_path') . '/' . $yakiBgHeader->content;
            }

            $view->with('yakiBgHeaderImg', $yakiBgHeaderImg);

            // image footer
            if (null == $yakiBgFooter)
            {
                $yakiBgFooterImg = config('filesystems.disks.image.simple_path'). '/yaki-background-01.jpg';
            }
            else
            {
                $yakiBgFooterImg = config('filesystems.disks.wbg.simple_path') . '/' . $yakiBgFooter->content;
            }

            $view->with('yakiBgFooterImg', $yakiBgFooterImg);

            // about image
            if (null == $yakiAboutParam)
            {
                $yakiAboutImg = config('filesystems.disks.image.simple_path'). '/yaki-about.jpg';
            }
            else
            {
                $yakiAboutImg = config('filesystems.disks.other.simple_path') . '/' . $yakiAboutParam->content;
            }

            $view->with('yakiAboutImg', $yakiAboutImg);

            // Recruitment image
            if (null == $yakiRecruitmentParam)
            {
                $yakiRecruitmentImg = config('filesystems.disks.image.simple_path'). '/yaki-tuyendung.jpg';
            }
            else
            {
                $yakiRecruitmentImg = config('filesystems.disks.other.simple_path') . '/' . $yakiRecruitmentParam->content;
            }

            $view->with('yakiRecruitmentImg', $yakiRecruitmentImg);

            // Category display home
            $view->with('yakiCategoryDisplayHome', $yakiCategoryDisplayHome);

            // Yaki member policy
            $view->with('yakiMemberPolicy', $yakiMemberPolicy);
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
