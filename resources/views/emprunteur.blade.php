@extends('layout.index')

@section('contenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emprunteurs</title>
</head>
<body>
    <div class="container mt-5 pt-5">
        <a href="{{Route('emprunteur.new')}}">nouveau emprunteur</a>
      <table class="table-bordered table">
          <thead>
              <th>NUMERO</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Action</th>
          </thead>
          <tbody>
              @foreach($emprunteurs as $item)
              <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->nom}}</td>
                  <td>{{$item->email}}</td>
                  <td>
                      <a href="{{'/edit_emprunteur/'.$item->id}}" class="btn btn-success">edit</a>
                      <a href="{{'/delete_emprunteur/'.$item->id}}" class="btn btn-danger">delete</a>

                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
</body>
</html>
@endsection