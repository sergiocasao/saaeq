<?php

namespace App\Http\Controllers\Client\Curses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignatureController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($curse_slug, $signature_slug)
    {
        dump($curse_slug);
        dd($signature_slug);
        return view('welcome');
    }


}
