<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acceuilcontroller extends Controller
{
    public function index()
    {
        $countL=\DB::select("SELECT COUNT(*) AS id FROM livre");
        $countE=\DB::select("SELECT COUNT(*) AS id FROM emprunt");
        $countP=\DB::select("SELECT COUNT(*) AS id FROM emprunteur");

        return view ('acceuil',compact('countL','countE','countP'));
    }
    public function acceuil()
    {
        return view('acceuil');
    }
    //
}
