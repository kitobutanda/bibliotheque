<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class Livrecontrolleur extends Controller
{
    public function index()
    {
        $livre=\DB:: select ("SELECT * FROM livre");
        return view ('livre',compact('livre'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'matricule'=>'required',
            'titre'=>'required',
            'edition'=>'required',
            'auteur'=>'required',
            'domaine'=>'required',
            'quantite'=>'required',
            'resume'=>'required',
            'date_publication'=>'required',   
            
        ]);

        $responsable =Auth::user()->noms;

       \DB::table('livre')->insert([
            'matricule'=>$request->matricule,
            'titre'=>$request->titre,
            'edition'=>$request->edition,
            'auteur'=>$request->auteur,
            'domaine'=>$request->domaine,
            'quantite'=>$request->quantite,
            'resume'=>$request->resume,
            'date_publication'=>$request->date_publication,
            'responsable' => $responsable,
        ]);
     return Response()->json(["message"=>"insertion sussess"]);
 
    }
    public function edit($id)
    {
        $data=\DB::select("SELECT * FROM livre WHERE id = ?",[$id]);
        $livres=$data[0];
        return view('edit_livre',\compact('livres'));
    }
    public function update(Request $request)
    {
        \DB::update("UPDATE livre SET matricule = ? , titre = ? ,  edition = ? , domaine = ? , auteur=? , quantite=?,resume=?,date_publication=? ,responsable=?  WHERE id = ? ", [$request->matricule,$request->titre, $request->edition,$request->domaine,$request->auteur,$request->quantite,$request->resume,$request->date_publication,$request->responsable,$request->id]);
        
        return redirect()->route('livre')->with('modif','modifier avec success');

    }

    public function delete($id)
    {
        \DB::delete(" DELETE FROM  livre WHERE id = ? ",[$id]); 
        return redirect()->route('livre')->with('supprimer', 'supression avec success');
    }
    public function new()
    {
        return view('new_livre');
    }
}
