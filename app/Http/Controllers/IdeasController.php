<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeasController extends Controller
{

public function myIdeas(){
    $idea = new Idea([
    'name' => "stored creds ideas",
    'qty' => 69,
    'price' => 47.0,
    'description' => 'This is a test for the creds stored automatically'
    ]);
    $idea -> save();

    return view('ideas.ideas');
}

}
