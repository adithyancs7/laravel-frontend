<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialAppController extends Controller
{
    public function feed(){
        return view('social.feed');
    }
}
