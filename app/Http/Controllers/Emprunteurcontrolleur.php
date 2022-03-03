<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Emprunteurcontrolleur extends Controller
{
   public function index()
   {
      $emprunteurs=\DB::select("SELECT * FROM emprunteur");
      return view('emprunteur',compact('emprunteurs'));
   }
   public function store(Request $request)
   {
       $request->validate([
           'nom'=>'required',
           'email'=>'required',

       ]);
       \DB::table('emprunteur')->insert([
           'nom'=>$request->nom,
           'email'=>$request->email
       ]);
       return Response()->json(["message"=>"insertion sussess"]);

   }
   public function edit($id)
   {
        $data=\DB::select("SELECT * FROM emprunteur WHERE id=?" , [$id]);
        $emprunts=$data[0];
        return view('edit_emprunteur',\compact('emprunts'));
   }
   public function update(Request $request)
   {
        \DB::update("UPDATE emprunteur SET nom = ?, email = ? WHERE id = ?",[$request->nom,$request->email,$request->id]);
         return redirect()->Route('emprunteur');
    }
   public function delete($id)
   {
    \DB::delete(" DELETE FROM  emprunteur WHERE id = ? ",[$id]); 
    return redirect()->route('emprunteur')->with('supprimer', 'supression avec success');

   }
   
    //
}
