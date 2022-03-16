<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stockcontrolleur extends Controller
{
   public function index()
   {
       $stock=\DB::select("SELECT * FROM stock");
       return view('retour',compact('stock'));
   }
    //
}
