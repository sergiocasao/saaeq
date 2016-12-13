<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Content;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        dd(Content::getRandomVideo('elementos-de-la-tabla-periodica'));
        return redirect()->route('user::index', Auth::user()->slug );
    }

    public function index()
    {
        return view('user.home');
    }
}
