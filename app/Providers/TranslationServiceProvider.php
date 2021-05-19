<?php

namespace App\Providers;

use Illuminate\Filesystem\Cache;
use Illuminate\Support\ServiceProvider;
use Prophecy\Call\Call;

class TranslationServiceProvider extends ServiceProvider
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
        Cache::remember('translations', 10, function(){
            return ExportLocalization::export()->toFlat();
        })
    }
}
