<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Auth;
class Logincontroller extends Controller
{
    //etap 4, on importe use\Auth 

    public function index()
    {
        return view ('login');
    }
    public function authenticate(Request $request)
    {
        if( Auth::attempt(['username'=>$request->username , 'password'=>$request->password]))
        {
            return view('welcome');
        }
        else{
            return view ('error');
        }
    }

}
