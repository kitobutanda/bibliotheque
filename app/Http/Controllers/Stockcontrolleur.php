<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stockcontrolleur extends Controller
{
   public function index()
   {
       $stock=\DB::select("SELECT * FROM alerte");
       return view('acceuil',compact('stock'));
   }
    //
}
