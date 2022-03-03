@extends('layout.index')
@section('contenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RETOUR</title>
</head>
<body>
    <div class="container mt-5 pt-5">
        <form  id="myformulaire">
            <label for=""class="form-control">emprunteur</label>
            <!-- <select name="emprunteur" id="emprunteur" >
               <option value="">----emprunteur</option>
               <option value="">juliany</option>
            </select> -->
            <input type="text" name="emprunteur" id="emprunteur" class="form-control"><br>
            <label for=""class="form-control">livre</label>
            <input type="text" name="livre" id="livre"class="form-control"><br>
            <label for=""class="form-control">Quantite</label>
            <input type="number" min="1" name="quantiteR" id="quantiteR" class="form-control"><br>
            <label for=""class="form-control">Date</label>
            <input type="date" name="dateR" id="dateR"class="form-control"><br>
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
               url:'{{ Route('retour.store') }}',
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