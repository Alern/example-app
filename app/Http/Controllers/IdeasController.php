<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeasController extends Controller
{

public function myIdeas(){
    $idea = new Idea();
    $idea -> name = 'my first idea';
    $idea -> qty = 17;
    $idea -> price = 10.3;
    $idea -> description ='JUst trying to understand laravel';
    $idea -> save();

    return view('ideas.ideas');
}

}
