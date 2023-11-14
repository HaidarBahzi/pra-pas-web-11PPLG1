<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        return view('game', [
            "title" => "All Games",
            "games" => Game::all()
        ]);
    }
}
