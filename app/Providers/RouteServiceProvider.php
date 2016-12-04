<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Lists of blind clases
     * @var array
     */
    protected $bind_classes = [
        'App\Http\Binds\ManageUserBind',
        'App\Http\Binds\ManagePhotosBind',
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
        $this->runBindMethods();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapUserRoutes();

        $this->mapAdminRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
            'as' => 'client::'
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * These routes are typically user page.
     *
     * @return void
     */
    protected function mapUserRoutes()
    {
        Route::group([
            'middleware' => ['web', 'auth', 'user'],
            'namespace' => $this->namespace,
            'prefix' => 'user',
            'as' => 'user::'
        ], function ($router) {
            require base_path('routes/user.php');
        });
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes are typically dashboard.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => ["web",'admin'],
            'namespace' => $this->namespace,
            'prefix' => 'admin',
            'as' => 'admin::'
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }

    /**
     * run bind method of the registred bind class
     */
    protected function runBindMethods()
    {
        foreach ($this->bind_classes as $bind_class) {
            $bind_class::Bind();
        }
    }
}
