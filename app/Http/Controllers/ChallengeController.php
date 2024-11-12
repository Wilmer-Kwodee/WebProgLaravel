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
            // if udah register:
            //      random ambil 3 challenge ke user, setiap harinya jadi
            //      kek mesti check apakah hari ini udah lewat atau belum,
            //      klo blm lewat load aja 3 yg udh digenerate sebelumnya

            // else 
            //      show aja semua challenge
                    $all_challenges = Challenge::all();
                    return view('home', ['challenges' => $all_challenges]); 
    }
}
