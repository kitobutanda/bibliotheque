@extends('layout.index')
@section('contenu')
    <div class="container mt-5 pt-5">
        <form action="{{ Route('emprunteur.update') }}" method="post">
            @csrf
            <input type="hidden" value="{{ $emprunts->id }}" name="id" id="id" class="form-control">
            <label for="">nom</label>
            <input type="text" name="nom" value="{{ $emprunts->nom }}" id="nom" class="form-control"><br>
            <label for="">email</label>
            <input type="email" name="email" value="{{$emprunts->email}" id="email" class="form-control"><br>
                <input type="submit" value="modifier">
            </form>
        </div>
@endsection

         
