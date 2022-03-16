<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Empruntcontrolleur extends Controller
{
    public function index()
    {
       $emprunts=\DB::select("SELECT * FROM emprunt ORDER  BY id DESC");
       return view('emprunt',compact('emprunts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'emprunteur'=>'required',
            'livre_emprunter'=>'required',
            'quantite_prise'=>'required',
        ]);

        \DB::statement("CALL sp_livre(?,?,?)",[
            $request->emprunteur,
            $request->livre_emprunter,
            $request->quantite_prise
        ]);

        return Response()->json(["message"=>"insertion sussess"]);
        
        
 
      
    }
    public function edit($id)
    {
         $data=\DB::select("SELECT * FROM emprunt WHERE id=?" , [$id]);
         $emprunt=$data[0];
         return view('edit_emprunt',\compact('emprunt'));
    }
    public function update(Request $request)
    {
         \DB::update("UPDATE emprunt SET emprunteur= ?, livre_emprunter = ? , quantite_prise =?,  date_emprunt = ? ",[$request->emprunteur,$request->livre_emprunter,$request->quantite_prise,$request->date_emprunt,$request->id]);
          return redirect()->Route('emprunt');
     }
    public function delete($id)
    {
     \DB::delete(" DELETE FROM  emprunt WHERE id = ? ",[$id]); 
     return redirect()->route('emprunt')->with('supprimer', 'supression avec success');
 
    }

    
    //
}
//\DB::table('emprunt')->insert([
    //         'emprunteur'=>$request->emprunteur,
    //         'livre_emprunter'=>$request->livre_emprunter,
    //         'quantite_prise'=>$request->quantite_prise,
    //         'date_emprunt'=>$request->date_emprunt
    //     ]);
    //    return Response()->json(["message"=>"insertion sussess"]);