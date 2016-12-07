<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curse;

class ClientController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'cursos' => Curse::orderBy('created_at')->with('signatures', 'publish')->whereHas('publish', function($q){
                return $q->where(['is_publish' => true ]);
            })->with('signatures')->get(),
        ];

        return view('welcome', $data);
    }


}
