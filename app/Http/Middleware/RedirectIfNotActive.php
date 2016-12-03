<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Response;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class RedirectIfNotActive
{

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $current_user = $this->auth->user();

        if (Auth::check() && !$current_user->active) {
            return Redirect::route('client::showActivateAccountForm', cltvoMailEncode($current_user->email));
        }

        return $next($request);
    }
}
