<?php

namespace App\Http\Controllers\Client\Curses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($curse_slug)
    {
        dd($curse_slug);
        return view('welcome');
    }


}
