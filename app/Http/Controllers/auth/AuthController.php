<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
 



class AuthController extends Controller
{
    public function register(RegisterRequest $request){

        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $confirm=$request->input('confirm');

        if($password==$confirm){
            User::create(
                [
                    'name'=>$name,
                    'email'=>$email,
                    'password'=>Hash::make($password)
                ]
                );
                return redirect()->intended('dashboard');
        }
    }
        
        public function login(Request $request){
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
     
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->intended('home');
            }
     
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

  public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
    
}
