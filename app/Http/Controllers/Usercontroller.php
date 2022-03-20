<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
   public function index()
   {
       $user=\DB::select("SELECT * FROM users");
       return view('users',\compact('user'));
   }
   
   
   
}
