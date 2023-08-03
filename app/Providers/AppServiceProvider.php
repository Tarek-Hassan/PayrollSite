<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (Session::has('locale')) {
                App::setLocale(Session::get('locale'));
            }
            $lang = App::getLocale();
            $dir = App::isLocale('ar') ? 'rtl' : 'ltr';
            $direction = App::isLocale('ar') ? 'right' : 'left';
            $reverse_direction = App::isLocale('ar') ?  'left':'right';
            $settings = Setting::first();
            
            $view->with(compact('settings','dir', 'lang','direction','reverse_direction'));
        });
    }
}
