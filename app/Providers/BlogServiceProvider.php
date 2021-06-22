<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->topMenu();
    }

    //Меню для пользователей
    public function topMenu()
    {
        View::composer('layouts.header', function ($view){
            $view->with('categories', Category::whereParentId(0)->wherePublished(1)->get());
        });

    }
}
