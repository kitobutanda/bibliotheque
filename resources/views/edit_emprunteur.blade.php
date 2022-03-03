@extends('layout.index')
@section('contenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emprunteur</title>
</head>
<body>
    <div class="container mt-5 pt-5">
    <form action="{{ Route('emprunteur.update')}}" method="post">
        @csrf
            <input type="hidden" value="{{$emprunts->id}}" name="id" id="id">
            <label for="">nom</label>
            <input type="text" name="nom" value="{{$emprunts->nom}}" id="nom"><br>
            <label for="">email</label>
            <input type="text" name="email" value="{{$emprunts->email}" id="email"><br>
            <input type="submit" value="modifier">
        </form>
    </div>
</body>
</html>
@endsection

         