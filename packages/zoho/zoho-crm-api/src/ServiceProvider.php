<?php

namespace Zoho\CRM;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/zoho.php', 'zoho'
        );

        $this->app->singleton(\Zoho\CRM\Services\Oauth2Service::class);
        $this->app->singleton(\Zoho\CRM\Services\RecordService::class);
        $this->app->singleton(\Zoho\CRM\Services\ZohoCrmApiService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }
}
