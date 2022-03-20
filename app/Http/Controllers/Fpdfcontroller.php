<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class Fpdfcontroller extends Controller
{
    public function index()
    {
        $req=\DB::select('SELECT * FROM livre ');
        $DATES=\DB::select('SELECT COUNT(id),CURDATE()AS dates FROM livre');

        $fpdf= new Fpdf();

        $fpdf->AddPage();
        $fpdf->Image('../public/img/livre.jpg',6,5,196);
        $fpdf->Ln(55);

        $fpdf->SetFont('Arial','B','14');
       $fpdf->Cell(190,10,"livres",1,1,'C');
       $fpdf->SetFont('Arial','B','14');
		$fpdf->Cell(10,6 ,'NUM',1,0,'C');
        $fpdf->Cell(30,6,'TITRE',1,0,'C');
		$fpdf->Cell(45,6,'AUTEUR',1,0,'C');
		$fpdf->Cell(25,6,'EDITION',1,0,'C');
		$fpdf->Cell(30,6,'DOMAINE',1,0,'C');
		$fpdf->Cell(50,6,'RESPONSABLE',1,0,'C');
		$fpdf->Ln();
      

	foreach ($req as $row) {
		
		
		$fpdf->Cell(10,8,$row->id,1,0,'C');
		$fpdf->Cell(30,8,$row->titre,1,0,'C');
	    $fpdf->Cell(45,8,$row->auteur,1,0,'C');
		$fpdf->Cell(25,8,$row->edition,1,0,'C');
		$fpdf->Cell(30,8,$row->domaine,1,0,'C');
	    $fpdf->Cell(50,8,$row->responsable,1,0,'C');
		
		$fpdf->Ln();
	}
    foreach($DATES as $d)
    {

//  $fpdf->Cell(40,8,'DAY',1,0,'C');
 $fpdf->Cell(190,8,'DAY'.$d->dates,1,0,'C');	
    }
    $fpdf->Output();
    exit;
    }

    public function index1()
    {
        $req=\DB::select('SELECT * FROM retour ');
        $date=\DB::select('SELECT COUNT(id), CURDATE()AS dates FROM retour');
        $fpdf= new Fpdf();

        $fpdf->AddPage();
        $fpdf->Image('../public/img/retour.jpg',6,5,196);
        $fpdf->Ln(55);

        $fpdf->SetFont('Arial','B','14');
       $fpdf->Cell(190,10,"livres retournes",1,1,'C');
       $fpdf->SetFont('Arial','B','14');
		$fpdf->Cell(20,6 ,'NUM',1,0,'C');
        $fpdf->Cell(50,6,'EMPRUNTEUR',1,0,'C');
		$fpdf->Cell(40,6,'LIVRE',1,0,'C');
		$fpdf->Cell(30,6,'QUANTITE',1,0,'C');
		$fpdf->Cell(50,6,'DATE',1,0,'C');
		
		$fpdf->Ln();
    
	foreach ($req as $row) {
			
		$fpdf->Cell(20,8,$row->id,1,0,'C');
		$fpdf->Cell(50,8,$row->emprunteur,1,0,'C');
	    $fpdf->Cell(40,8,$row->livre,1,0,'C');
		$fpdf->Cell(30,8,$row->quantiteR,1,0,'C');
		$fpdf->Cell(50,8,$row->dateR,1,0,'C');
		
		$fpdf->Ln();
	}
    foreach($date as $d)
    {

 $fpdf->Cell(190,8,'DAY'.$d->dates,1,0,'C');

		
    }

    
    $fpdf->Output();

    exit;
    }

    public function index2()
    {
        $req=\DB::select('SELECT * FROM emprunt ');
        $date=\DB::select('SELECT COUNT(id) ,CURDATE() AS dates FROM emprunt');

        $fpdf= new Fpdf();

        $fpdf->AddPage();
        $fpdf->Image('../public/img/emprunt.jpg',6,5,196);
        $fpdf->Ln(55);

       
        $fpdf->SetFont('Arial','B','14');
       $fpdf->Cell(190,10,"livres emprunts",1,1,'C');
       $fpdf->SetFont('Arial','B','14');
		$fpdf->Cell(20,6 ,'NUM',1,0,'C');
        $fpdf->Cell(40,6,'EMPRUNTEUR',1,0,'C');
		$fpdf->Cell(40,6,'LIVRE',1,0,'C');
        $fpdf->Cell(30,6,'QUANTITE',1,0,'C');
		$fpdf->Cell(60,6,'DATE',1,0,'C');
		
		$fpdf->Ln();
      

	foreach ($req as $row) {
		
		
		$fpdf->Cell(20,8,$row->id,1,0,'C');
		$fpdf->Cell(40,8,$row->emprunteur,1,0,'C');
	    $fpdf->Cell(40,8,$row->livre_emprunter,1,0,'C');
		$fpdf->Cell(30,8,$row->quantite_prise,1,0,'C');
		$fpdf->Cell(60,8,$row->date_emprunt,1,0,'C');
	  
		$fpdf->Ln();
	}
    foreach($date as $d)
    {
 $fpdf->Cell(190,8,'HEREUR ACCTUELLE'.$d->dates,1,0,'C');	
    }

    
    $fpdf->Output();

    exit;

    }
   
    public function index3()
    {
        $req=\DB::select('SELECT * FROM emprunteur ');
       

        $fpdf= new Fpdf();

        $fpdf->AddPage();
        $fpdf->Image('../public/img/emprunteurs.jpg',6,5,196);
        $fpdf->Ln(55);

       
        $fpdf->SetFont('Arial','B','14');
      
       $fpdf->SetFont('Arial','B','14');
		$fpdf->Cell(40,6 ,'NUMERO',1,0,'C');
        $fpdf->Cell(50,6,'NOM',1,0,'C');
		$fpdf->Cell(80,6,'EMAIL',1,0,'C');
      
		
		$fpdf->Ln();
      

	foreach ($req as $row) {
		
		
		$fpdf->Cell(40,8,$row->id,1,0,'C');
		$fpdf->Cell(50,8,$row->nom,1,0,'C');
	    $fpdf->Cell(80,8,$row->email,1,0,'C');
		$fpdf->Ln();
	}
    $fpdf->Output();

    exit;

    }
    public function index4()
    {
        
        // $req=\DB::select('SELECT * FROM emprunt ');
        $date=\DB::select('SELECT COUNT(id) ,CURDATE() AS dates FROM emprunt');
        $emprunt_today=\DB::select("SELECT * FROM emprunt WHERE id=id");
        return view('emprunt',compact('emprunt_today'));
 
        $fpdf= new Fpdf();

        $fpdf->AddPage();
        $fpdf->Image('../public/img/emprunt.jpg',6,5,196);
        $fpdf->Ln(55);

       
        $fpdf->SetFont('Arial','B','14');
       $fpdf->Cell(190,10,"livres emprunts",1,1,'C');
       $fpdf->SetFont('Arial','B','14');
		$fpdf->Cell(20,6 ,'NUM',1,0,'C');
        $fpdf->Cell(40,6,'EMPRUNTEUR',1,0,'C');
		$fpdf->Cell(40,6,'LIVRE',1,0,'C');
        $fpdf->Cell(30,6,'QUANTITE',1,0,'C');
		$fpdf->Cell(60,6,'DATE',1,0,'C');
		
		$fpdf->Ln();
      

	foreach ($emprunt_today as $row) {
		
		
		$fpdf->Cell(20,8,$row->id,1,0,'C');
		$fpdf->Cell(40,8,$row->emprunteur,1,0,'C');
	    $fpdf->Cell(40,8,$row->livre_emprunter,1,0,'C');
		$fpdf->Cell(30,8,$row->quantite_prise,1,0,'C');
		$fpdf->Cell(60,8,$row->date_emprunt,1,0,'C');
	  
		$fpdf->Ln();
	}
    foreach($date as $d)
    {
 $fpdf->Cell(190,8,'HEREUR ACCTUELLE'.$d->dates,1,0,'C');	
    }

    
    $fpdf->Output();

    exit;

    }
    
}
