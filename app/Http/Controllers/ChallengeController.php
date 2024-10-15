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
        /*
        (Tanpa Eloquent):
        */
        if (Auth::check()) {
            $curr_user_id = Auth::id();
            $today = Carbon::now()->toDateString();
    
            $user_challenges = UserChallenge::where('user_id', $curr_user_id)
                ->whereDate('created_at', $today)
                ->get();
    
            if ($user_challenges->isEmpty()) {
                $all_challenges = Challenge::all();
                $random_challenges = $all_challenges->random(3);
    
                // Insert each random challenge into the `user_challenges` table
                foreach ($random_challenges as $challenge) {
                    UserChallenge::create([
                        'user_id' => $curr_user_id,
                        'challenge_id' => $challenge->id,
                        'created_at' => $today, // Store the challenge with today's date
                        'updated_at' => $today,
                    ]);
                }
    
                return view('home', ['challenges' => $random_challenges]);
            }
            else{
                $challenges = [];
                // Use foreach to iterate through user challenges
                foreach ($user_challenges as $user_challenge) {
                    // Fetch the challenge for each user challenge record
                    $challenges[] = Challenge::find($user_challenge->challenge_id);
                }
                return view('home', ['challenges' => $challenges]);
            }
        }
        else{
            $all_challenges = Challenge::all();
            // Return all challenges to the view
            return view('home', ['challenges' => $all_challenges]);
        }
        
        // Dengan Eloquent
        // $existingChallenges = UserChallenge::where('user_id', 3)->get();
        // if ($existingChallenges == 0) {
        // }    
    }
}
