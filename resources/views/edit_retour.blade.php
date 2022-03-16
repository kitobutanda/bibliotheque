@extends('layout.index')
@section('contenu')
    <div class="container mt-5 pt-5">
        <form action="{{ Route('retour.update') }}" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $retourL->id }}">
            <input type="text" id="emprunteur" name="emprunteur" value="{{ $retourL->emprunteur }}" class="form-control">
            <input type="text" id="livre" name="livre" value="{{ $retourL->livre }}" class="form-control">
            <input type="number" id="quantiteR" name="quantiteR" value="{{ $retourL->quantiteR }}" class="form-control">
            <input type="date" id="dateR" name="dateR" value="{{ $retourL->quantiteR }}" class="form-control">
            <input type="submit" value="modifier" class="btn btn-primary">
        </form>
    </div>
@endsection
