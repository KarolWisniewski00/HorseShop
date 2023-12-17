<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $setting = Setting::get()->pluck('content', 'type');
            $user = Auth::user();
            if (!Str::startsWith(request()->path(), 'dashboard/')) {
                $view->with('setting', $setting)->with('user', $user);
            }
        });
    }
}
