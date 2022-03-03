<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Retourcontrolleur extends Controller
{
    public function index()
    {
        $retour=\DB::select("SELECT * FROM retour");
        return view('retour',\compact('retour'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'emprunteur'=>'required',
            'livre'=>'required',
            'quantiteR'=>'required',
            'dateR'=>'required',
        ]);
        \DB::table('retour')->insert([
            'emprunteur'=>$request->emprunteur,
            'livre'=>$request->livre,
            'quantiteR'=>$request->quantiteR,
            'dateR'=>$request->dateR,
        ]); 
        //  return Response()->json(["message"=>"insertion sussess"]);
   

    }
    public function edit($id) 
    {
        $data=\DB::select("SELECT * FROM retour WHERE id=?",[$id]);
        $retourL=$data[0];
        return view ('edit_retour',compact('retourL'));
    }
    public function update(Request $request)
    {
        \DB::update("UPDATE retour  SET emprunteur = ? , livre = ? , quantiteR = ? , dateR = ? WHERE id = ?", [$request->emprunteur,$request->livre,$request->quantiteR,$request->dateR,$request->id]);
        return redirect()->route('retour')->with('message','updated sucess');
    }
    public function delete($id)
    {
        \DB::delete("DELETE   FROM retour WHERE id = ?",[$id]);
        return redirect()->route('retour')->with("message","deleted success");

    }
   
    //
}
