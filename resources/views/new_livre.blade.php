@extends(' layout.index')
@section ('contenu')
<div class="container pt-5 mt-5">

      <!-- <form method="POST" action="{{route('livre.store')}} "id="monformulaire"> -->
      <form  id="monformulaire">

   @csrf
      <div class="row">
         <div class="col-md-4">
            <input type="text" class="form-control" name="titre" placeholder="entre le titre du livre " id="titre"> <br>  <br> 
         </div>
         <div class="col-md-4">
            <input type="text" class="form-control" name="matricule" placeholder="entre le matricule" id="matricule"> <br>  <br> 
         </div>
         <div class="col-md-4">  
              <input type="text" class="form-control" name="edition" placeholder="entre l'edition" id="edition"> <br>  <br> 
         </div>
         
      </div>
      <textarea name="resume" id="resume" cols="10" class="form-control" placeholder="entre le resume" rows="4"></textarea> <br>
      <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" name="domaine" placeholder="entre le domaine" id="domaine"> <br>  <br> 
         </div>
         <div class="col-md-4">   
             <input type="text" class="form-control" name="auteur" placeholder="entre l'auteur" id="auteur"> <br>  <br> 
         </div>
         
         <div class="col-md-4">    
            <input type="number" class="form-control" name="quantite" placeholder="entre la quantite" id="quantite"> <br>  <br> 
         </div>
         
      </div>
      <div class="row">
          <div class="col-md-6">
            <input type="date" class="form-control" name="date_publication"  id="date_publication">

          </div>
          <div class="col-md-6">
          <input type="text" class="form-control" name="responsable" placeholder="entre le responsable" id="responsable">

          </div>
         
      </div>
      <br>
      <input type="submit" value="enregistre" class="btn btn-primary">
     <a href="{{Route('livre')}}" class="btn btn-success"><<<</a>

   </form>
</div>
@endsection

@section('monscript')
    <script>
         $('#monformulaire').submit(function(event){
            event.preventDefault();
            $.ajax({ 
               url:'{{ Route('livre.store') }}',
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