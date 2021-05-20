<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use KgBot\LaravelLocalization\Facades\ExportLocalizations as ExportLocalizations;

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
            return ExportLocalizations::export()->toFlat();
            
        });
    }
}
