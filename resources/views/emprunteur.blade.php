@extends('layout.master')

@section('contenu')
    <div class="container mt-5 pt-5">
        <a href="{{ Route('emprunteur.new') }}" class="btn btn-primary offset-8">nouveau emprunteur</a>
        <table class="table-bordered table">
            <thead>
                <th>NUMERO</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($emprunteurs as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ '/edit_emprunteur/' . $item->id }}" class="btn btn-success"> <i
                                    class="fa fa-edit"></i></a>
                            <a href="{{ '/delete_emprunteur/' . $item->id }}" class="btn btn-danger">del</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    >
@endsection
