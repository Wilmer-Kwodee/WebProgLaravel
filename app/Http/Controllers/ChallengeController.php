<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\UserChallenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    //
    public function index(){
        // Dengan Eloquent
        // $existingChallenges = UserChallenge::where('user_id', 3)->get();
        // if ($existingChallenges == 0) {

        // }

        /*
            (Tanpa Eloquent):
            // Fetch user challenges for user_id = 3
            */
            $user_challenges = UserChallenge::where('user_id', 3)->get();
            $challenges = [];
            // Use foreach to iterate through user challenges
            foreach ($user_challenges as $user_challenge) {
                // Fetch the challenge for each user challenge record
                $challenges[] = Challenge::find($user_challenge->challenge_id);
            }
        return view('home', ['challenges' => $challenges]);
    }
}
