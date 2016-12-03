<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    // admin
        // view()->composer('layouts.admin', 'App\Http\ViewComposers\AdminLayoutComposer');
        // view()->composer('admin.general._menu', 'App\Http\ViewComposers\AdminTopMenuComposer');
        view()->composer('admin.general._sidebar', 'App\Http\ViewComposers\AdminMainMenuComposer');

    // font
        view()->composer('layouts.client', 'App\Http\ViewComposers\ClientLayoutComposer');
        // view()->composer('client.menus._menuTop', 'App\Http\ViewComposers\ClientTopMenuComposer');
        // view()->composer('client.menus._menuMain', 'App\Http\ViewComposers\ClientMainMenuComposer');
        // view()->composer('client.shopping-cart.partials.menu', 'App\Http\ViewComposers\ClientBagsMenuComposer');

    // email
        // view()->composer('vendor.notifications.email', 'App\Http\ViewComposers\EmailLayoutComposer' );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
