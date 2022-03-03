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
         <a href="/new_retour" class="btn btn-primary offset-10">nouveau retour</a>
         <table class="table-bordered table stripped">
             <thead>
                 <tr>
                     <th>Numero</th>
                     <th>Emprunteur</th>
                     <th>Livre</th>
                     <th>Quantite</th>
                     <th>Date</th>
                     <th>Action</th>
                </tr>
             </thead>
             <tbody>
                 @foreach($retour as $item)
                 <tr>
                     <td>{{$item->id}}</td>
                     <td>{{$item->emprunteur}}</td>
                     <td>{{$item->livre}}</td>
                     <td>{{$item->quantiteR}}</td>
                     <td>{{$item->dateR}}</td>
                     <td>
                         <a href="{{'/edit_retour/'.$item->id}}" class="btn btn-sucsess">edit</a>
                         <a href="{{'/delete_retour/'.$item->id}}" class="btn btn-danger">delete</a>
                     </td>

                 </tr>
                  @endforeach
             </tbody>
         </table>
     </div>
 </body>
 </html>
@endsection
