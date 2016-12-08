<?php

namespace App\Http\Controllers\Client\Curses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Signature;
use App\Curse;

class SignatureController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Curse $curse, Signature $signature)
    {
        // dump($curse);
        // dump($signature);

        $data = [
            'curse' => $curse,
            'signature' => $signature,
        ];
        return view('user.curses.signature', $data);
    }


}
