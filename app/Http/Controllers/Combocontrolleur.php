<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Combocontrolleur extends Controller
{
    public function index()
    {
       $combolivre=\DB::select("SELECT * FROM livre");
       $empr=\DB::select("SELECT * FROM emprunteur");
        return view('new_emprunt',compact('combolivre','empr'));
       
       
       
    }
    public function index1(){
        $retourlivre=\DB::select("SELECT * FROM emprunt");
        return view ('new_retour',compact('retourlivre'));
        $countE=\DB::select("SELECT COUNT(*) AS id FROM emprunt");
    }
    
    //
}
