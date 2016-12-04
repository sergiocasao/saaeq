<?php

namespace App\Http\Controllers\Client\Curses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($class_slug)
    {
        dd($class_slug);
        return view('welcome');
    }


}
