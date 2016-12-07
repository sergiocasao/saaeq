<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Response;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class TestMaked
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

            if ($user->test_finished) {
                return Redirect::route('user::home', $user->slug)
                ->withErrors([
                    'message' => 'Whoops, parrece que ya haz terminado el test. Disfruta ahora de contenido personalizado para ti.',
                ]);
            }

        }

        return $next($request);
    }
}
