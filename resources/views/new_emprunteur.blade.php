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
        <form id="monformulaire">
            <label for="">nom</label>
            <input type="text" name="nom" id="nom"><br>
            <label for="">email</label>
            <input type="text" name="email" id="email"><br>
            <input type="submit" value="enregistrer">
        </form>
    </div>
</body>
</html>
@endsection
@section('monscript')
    <script>
         $('#monformulaire').submit(function(event){
            event.preventDefault();
            $.ajax({ 
               url:'{{ Route('emprunteur.store') }}',
               method:'POST',
               data: new FormData(this),
               processData:false,
               contentType:false,
               cache:false,
               headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
               success:function(data)
               {
                  alert('inserted succefully');
                  $('#monformulaire')[0].reset();
               }
            });
         });
      </script>
@endsection