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
        if (Auth::guest()) {
            $content = $theme->contents()->default()->get()->first();
        }else {
            // Get the content for the auth user;
        }

        $data = [
            'content' => $content,
            'theme'   => $theme,
        ];

        return view('user.curses.theme', $data);
    }


}
