@extends('./layout.index')
@section('contenu')
<br><br><br><br>
<div class="container mt-5 pt-5">
<form action="{{ Route('livre.update')}}" method="post">
     @csrf
     <input type="hidden" value="{{$livres->id}}" name="id" >
     <input type="text" class="form-control" value="{{$livres->matricule}} " name="matricule" placeholder="entre le matricule " id="matricule"> <br> 
    <input type="text" class="form-control" value="{{$livres->titre}} " name="titre" placeholder="entre le titre du livre " id="titre"> <br> 
    <input type="text" class="form-control" value="{{$livres->edition}} " name="edition" placeholder="entre l'edition" id="edition"> <br> 
     <input type="text" class="form-control" value="{{$livres->domaine}} " name="domaine" placeholder="entre le domaine" id="domaine"> <br> 
    <input type="text" class="form-control" value="{{$livres->auteur}} " name="auteur" placeholder="entre l'auteur" id="auteur"> <br> 
    <input type="number" class="form-control" value="{{$livres->quantite}} " name="quantite" placeholder="entre la quantite" id="quantite"> <br> 
    <input type="text" class="form-control" value="{{$livres->resume}} " name="resume" placeholder="entre un resume" id="resume"> <br> 
    <input type="date" name="date_publication"  value="{{$livres->date_publication}} "id="date_publication">
    <input type="text" class="form-control" value="{{$livres->responsable}} " name="responsable" placeholder="entre le responsable" id="responsable"> <br> 
     <input type="submit" value="Modifier" class="btn btn-primary">
 </form>
</div>


@endsection