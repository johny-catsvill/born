<?php

namespace App\Providers;

use App\Models\SeoPage;
use Illuminate\Support\ServiceProvider;
use Request;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('seo', $this->getSeoPage());
    }


    public function getSeoPage() {


        $data = false;

        $path = \Request::path();

        if(!$path) {
            $path = '/';
        }

        $page = SeoPage::where('slug', $path)->first();



        if($page) {
            return $page;
        }


        return $data;

    }
}
