<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;


use App\Models\TestModel;

class TestController extends Controller
{
    public function test(Request $request,$id=null){
        
        $create=TestModel::create([
            'name'=>$request->data['name'],
            'email'=>Carbon::now()
        ]);
        return $create;
    }
}
