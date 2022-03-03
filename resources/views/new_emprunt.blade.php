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
    <div class="container mt-5 pt-5">
        <form  id="myformulaire">
            <label for=""class="form-control">emprunteur</label>
            <input type="text" name="emprunteur" id="emprunteur" class="form-control"><br>
            <label for=""class="form-control">livre</label>
            <input type="text" name="livre_emprunter" id="livre_emprunter"class="form-control"><br>
            <label for=""class="form-control">Quantite</label>
            <input type="number" min="1" name="quantite_prise" id="quantite_prise" class="form-control"><br>
            <label for=""class="form-control">Date</label>
            <input type="date" name="date_emprunt" id="date_emprunt"class="form-control"><br>
            <input type="submit" value="enregistrer" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
@endsection
@section('monscript')
    <script>
         $('#myformulaire').submit(function(event){
            event.preventDefault();
            $.ajax({ 
               url:'{{ Route('emprunt.store') }}',
               method:'POST',
               data: new FormData(this),
               processData:false,
               contentType:false,
               cache:false,
               headers:{'X-CSRF-Token':$('meta[name="csrf-token"]').attr('content')},
               success:function(data)
               {
                  alert('inserted succefully');
                  $('#myformulaire')[0].reset();
               }
            });
         });
      </script>
@endsection