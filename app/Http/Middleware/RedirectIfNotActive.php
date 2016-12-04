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
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            $user = Auth::user();

            if (!$user->active) {
                Auth::logout();
                return Redirect::route('client::register.success.showActivationMessage', cltvoMailEncode($user->email) )
                ->withErrors([
                    'message' => 'Whoops, para iniciar sesión primero activa tu cuenta.',
                ]);;
            }

        }

        return $next($request);
    }
}
