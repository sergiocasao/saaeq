<?php

namespace App\Http\Controllers\Client\Curses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($theme_slug)
    {
        dd($theme_slug);
        return view('welcome');
    }


}
