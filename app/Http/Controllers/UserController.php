<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    //
    public function signup(Request $request){
        $newUser = new User();
        $newUser->name = $request->name_input;
        $newUser->email = $request->email_input;
        $newUser->password = $request->password_input;
        $newUser->save();

        return redirect('/');
    }
    public function logincheck(Request $request)
    {
        // Attempt to log in using email and password
        if (Auth::attempt(['email' => $request->email_input, 'password' => $request->password_input])) {
            return redirect('/');
        }
    
        return 'not found';
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
