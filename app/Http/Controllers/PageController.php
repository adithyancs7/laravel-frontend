<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// to use in blade
// <a href="#" class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}">

class PageController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    public function eco(){
        return view('eco');
    }

    public function dashboard(){
         $data=Auth::user()->name;
         $user=ucfirst($data);
        return view('dashboard', compact('user'));
    }


    /** 
     * n
     */
    public function home(){
        $data=Auth::user();
       return view('home', compact('data'));
    }

    
}
