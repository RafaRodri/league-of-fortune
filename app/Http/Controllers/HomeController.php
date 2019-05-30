<?php

namespace App\Http\Controllers;

use App\Team;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $teams = Team::all();

        return view('index', [
            'teams' => $teams,
        ]);
    }


    ############### SERÃO DELETADOS:
    public function champions()
    {
        return view('champions');
    }

    public function cup()
    {
        return view('cup');
    }

    public function hall()
    {
        return view('hall');
    }

    public function prize()
    {
        return view('prize');
    }
}
