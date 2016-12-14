<?php

namespace App\Providers;

use Validator;

use Hash;

use DB;

use Illuminate\Support\ServiceProvider;

class CustomValidationRulesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extendImplicit('password_check', function($attribute, $value, $parameters, $validator) {
            return Hash::check($value,$parameters[0]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
