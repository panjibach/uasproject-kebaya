<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\menu;
use App\Models\SettingMenu;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap();

        // Mengirimkan data menu ke sidebar secara otomatis

    }
    public function register(): void
    {
        //
    }
}
