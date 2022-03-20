@extends('layout.master')
@section('contenu')
    <div class="container mt-5 pt-5">
    <a href="{{route('fpdfR')}}" class=" btn btn-primary offset-10  mb-5"> IMPRIMER </a>

        <a href="new_retour" class="btn btn-primary offset-10 mb-2 "><i class="fa fa-plus text-white"> <span>Nouveau</span>
            </i> </a>
        <table class="table table-bordered stripped">
            <thead>
                <th>Numero</th>
                <th>Emprunteur</th>
                <th>Livre</th>
                <th>Quantite</th>
                <th>Date</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($retour as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->emprunteur }}</td>
                        <td>{{ $item->livre }}</td>
                        <td>{{ $item->quantiteR }}</td>
                        <td>{{ $item->dateR }}</td>
                        <td>
                            <a href="{{ '/edit_retour/' . $item->id }}" class="btn btn-success"> <i
                                    class="fa fa-edit"></i></a>
                            <a href="{{ '/delete_retour/' . $item->id }}" class="btn btn-danger">del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
