<?php

namespace App\Http\Controllers;

use App\Tournament;

class TypeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $tournaments = Tournament::all()->first();
        #$tournaments = $tournaments->all()[0];
        $tournaments = $tournaments->game();//->tournament();

        #dd($tournaments);

        return view('type.index',[
            'tournament' => $tournaments,
        ]);
    }
}
