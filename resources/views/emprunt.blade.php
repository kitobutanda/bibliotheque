@extends('layout.master')
@section('contenu')
    <div class="container mt-5 pt-5">
    <a href="{{route('fpdfE')}}" class=" btn btn-primary offset-10  mb-5"> IMPRIMER </a>
    <a href="new_emprunt" class=" btn btn-primary offset-10  mb-5"> Nouveau </a>

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
                @foreach ($emprunts as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->emprunteur }}</td>
                        <td>{{ $item->livre_emprunter }}</td>
                        <td>{{ $item->quantite_prise }}</td>
                        <td>{{ $item->date_emprunt }}</td>
                        <td>
                        <!-- <a href="{{route('fpdfday')}}" class=" btn btn-primary"> IMPRIMER </a> -->

                            <a href="{{ '/edit_emprunt/' . $item->id }}" class="btn btn-success"><i
                                    class="fa fa-edit"></i></a>
                            <a href="{{ '/delete_emprunt/' . $item->id }}" class="btn btn-danger">del</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
