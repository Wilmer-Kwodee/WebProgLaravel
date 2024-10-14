<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    //
    public function index(){
        $all_challenges = Challenge::all();
        $random_challenges = $all_challenges->random(3);

        // Pass the random challenges to the view
        return view('home', ['challenges' => $random_challenges]);
    }
}
