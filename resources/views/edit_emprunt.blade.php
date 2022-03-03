@extends('layout.index')
@section('contenu')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>emprunt</title>
    </head>
    <body>
        <div class="container mt-5 pt-5" >
        <form action="{{Route('emprunt.update')}}" method="POST">
            @csrf
            <input type="hidden"id="id" name="id" value="{{$emprunt->id}}" >
            <input type="text" id="emprunteur" name="emprunteur" value="{{$emprunt->emprunteur}}" class="form-control">
            <input type="text" id="livre_emprunter" name="livre_emprunter" value="{{$emprunt->livre_emprunter}}" class="form-control">
            <input type="number" id="quantite_prise" name="quantite_prise" value="{{$emprunt->quantite_prise}}" class="form-control">
            <input type="date" id="date_emprunt" name="date_emprunt" value="{{$emprunt->quantite_prise}}" class="form-control">
            <input type="submit" value="modifier"class="btn btn-primary">
        </form>
        </div>
        
    </body>
    </html>

@endsection