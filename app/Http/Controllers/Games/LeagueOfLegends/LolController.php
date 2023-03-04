<?php

namespace App\Http\Controllers\Games\LeagueOfLegends;

use App\Http\Controllers\Controller;

class LolController extends Controller
{
    public function index()
    {
        return view('games.lol.index');
    }
}
