<?php

namespace App\Providers;

use App\Models\FaqQuestion;
use App\Models\Page;
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
        view()->share('composerFaq', $this->getFaq());
    }

    public function getFaq() {


        $data = false;

        $path = \Request::path();

        if(!$path) {
            $path = '/';
        }

        $page = SeoPage::where('slug', $path)->first();

        if($page) {
            $data = FaqQuestion::whereHas('seoPageId', function ($query) use($page) {
                $query->where('id', $page->id);
            })->get();

        }
        else {
            $page = Page::where('slug', $path)->first();

            if($page) {
                $data = FaqQuestion::whereHas('pageId', function ($query) use($page) {
                    $query->where('id', $page->id);
                })->get();
            }
        }

        return $data;
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
