<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeasController extends Controller
{

public function myIdeas(){
    $idea = new Idea([
    'name' => "fresh idea",
    'qty' => 69,
    'price' => 47.0,
    'description' => 'This is an array input format to the db using the model'
    ]);
    $idea -> save();

    return view('ideas.ideas');
}

}
