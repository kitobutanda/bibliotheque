@extends('layout.master')
@section('contenu')
    <div class="container pt-5 mt-5">
        <h2>NOS LIVRES</h2>
        <a href="{{route('fpdfL')}}" class=" btn btn-primary offset-10  mb-5"> IMPRIMER </a>

        <a href="new_livre" class=" btn btn-primary offset-10"> Nouveau livre </a>
        <table class="table  table-bordered stripped mt-2">
            <thead>
                <th>N°</th>
                <th>Matricule</th>
                <th>Livre</th>
                <th>Edition</th>
                <!-- <th>Domaine</th> -->
                <th>Auteur</th>
                <th>Quantite</th>
                <th>Resume</th>
                <!-- <th>Datepub</th> -->
                <th>Responsable</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($livre as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->matricule }}</td>
                        <td>{{ $item->titre }}</td>
                        <td>{{ $item->edition }}</td>
                        <!-- <td>{{ $item->domaine }}</td> -->
                        <td>{{ $item->auteur }}</td>
                        <td>{{ $item->quantite }}</td>
                        <td>{{ $item->resume }}</td>
                        <!-- <td>{{ $item->date_publication }}</td> -->
                        <td>{{ Auth::user()->noms }}</td>

                        <td>
                            <a href="{{ '/edit_livre/' . $item->id }}" class="btn btn-success"><i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ '/delete_livre/' . $item->id }}" class="btn btn-danger"> del</a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
   <div class="modal">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h2>Ajouter un livre</h2>
               </div>
               <div class="modal-body">

               </div>
           </div>
       </div>
   </div>
    </div>
@endsection
