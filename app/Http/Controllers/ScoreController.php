<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index(Score $score)
    {
        return view('scores/index')->with(['scores' => $score->getPaginateByLimit()]);
    }
}
