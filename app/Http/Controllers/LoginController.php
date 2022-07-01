<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        // validasi
        $valid = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($valid)) {
            $request->session()->regenerate();
            return redirect('');
        }
 
        // error
        return back()->with([
            'message-error' => 'Login gagal!',
        ]);

        dd('LOGIN BERHASIL');
    }

    public function logout(){
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // home will be change from dashboard to login page if
        // user is logged out
        return redirect('/');
    }
}
