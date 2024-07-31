<?php

namespace App\Providers;

use App\Http\Controllers\Admin\GlobalController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $globalController = new GlobalController();
        $globalData = $globalController->getGlobalData();

        // Partager les données avec toutes les vues
        View::share('globalData', $globalData);
    }
}
