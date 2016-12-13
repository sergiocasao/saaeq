<?php

namespace App\Http\Controllers\Client\Curses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Signature;
use App\Curse;
use App\Theme;

use Auth;

class ThemesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Curse $curse, Signature $signature, Theme $theme)
    {
        if (Auth::guest() || !Auth::user()->test_finished) {
            $content = $theme->contents()->default()->get()->first();
        }else {
            $content = $theme->contents()->contentForUser(Auth::user())->get()->first();
        }

        $data = [
            'content'           => $content,
            'theme'             => $theme->load('exam'),
            'signature_slug'    => $signature->slug,
            'curse_slug'        => $curse->slug,
        ];

        return view('user.curses.theme', $data);
    }


}
