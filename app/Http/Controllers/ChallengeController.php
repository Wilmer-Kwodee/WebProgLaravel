<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\UserChallenge;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{
    //
    public function index(){
        $all_challenges = Challenge::all();
        return view('home', ['challenges' => $all_challenges]);
    }
    public function proof(){
        return view('proof');
    }
}
