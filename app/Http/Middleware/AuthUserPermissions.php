<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AuthUserPermissions
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
     * @return mixed
     */
    public function handle($request, Closure $next,$permission)
    {
        if (!$this->auth->user()->hasPermission($permission))
        {
            if ($request->ajax() || $request->wantsJson()){ 
                return response('Unauthorized.', 401);
            } else {
                return abort(401);
            }
        }

        return $next($request);
    }
}
