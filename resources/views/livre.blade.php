@extends('layout.index')
@section('contenu')
 <div class="container pt-5 mt-5">
 <h2>NOS LIVRES</h2>
    
  <a href="new_livre" class=" btn btn-primary offset-10" > Nouveau livre </a>  
 <table class="table  table-bordered stripped mt-2">
      <thead>
          <th>N°</th>
          <th>Matricule</th>
          <th>Livre</th>
          <th>Edition</th>
          <th>Domaine</th>
          <th>Auteur</th>
          <th>Quantite</th>
          <th>Resume</th>
          <!-- <th>Datepub</th> -->
          <th>Responsable</th>
          <th>Action</th>
      </thead>
      <tbody> 
      @foreach($livre as $item)
          <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->matricule}}</td> 
              <td>{{$item->titre}}</td>
              <td>{{$item->edition}}</td>
              <td>{{$item->domaine}}</td>
>             <td>{{$item->auteur}}</td>
              <td>{{$item->quantite}}</td>
              <td>{{$item->resume}}</td>
              <!-- <td>{{$item->date_publication}}</td> -->
              <td>{{$item->responsable}}</td>

              <td>
              <a href="{{'/edit_livre/'.$item->id}}" class="btn btn-success">e </a>
              <a href="{{'/delete_livre/'.$item->id}}"  class="btn btn-danger">d</a>

              </td>
          </tr>
          @endforeach
          
      </tbody>
     </table>
 </div> 
@endsection