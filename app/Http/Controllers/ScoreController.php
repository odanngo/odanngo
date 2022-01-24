<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index(Score $scores)
    {

        return view('scores/index')->with(['scores' => $scores->getPaginateByLimit()]);

    }
    
    public function show(Score $score)
    {
       return view('scores/show')->with(['scores' => $score]);
    }
    
    public function create()
    {
     return view('scores/create');
    }
    
    public function store(Request $request, Score $score)
    {
        $input = $request['score'];
        $input += ['user_id' => $request->user()->id];
        $score->fill($input)->save();
        return redirect('/scores/' . $score->id);
    }
    
    public function edit(Score $score)
    {
    return view('scores/edit')->with(['score' => $score]);
    }
    
    public function update(Request $request, Score $score)
    {
    $input_score = $request['score'];
    $score->fill($input_score)->save();

    return redirect('/scores/' . $score->id);
    }
    
    public function delete(Score $score)
    {
        $score->delete();
        return redirect('/');
    }
}