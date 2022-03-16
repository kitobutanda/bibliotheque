@extends('layout.index')
@section('contenu')
    <div class="container mt-5 pt-5">
        <form action="{{ Route('emprunt.update') }}" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $emprunt->id }}">
            <input type="text" id="emprunteur" name="emprunteur" value="{{ $emprunt->emprunteur }}" class="form-control">
            <input type="text" id="livre_emprunter" name="livre_emprunter" value="{{ $emprunt->livre_emprunter }}"
                class="form-control">
            <input type="number" id="quantite_prise" name="quantite_prise" value="{{ $emprunt->quantite_prise }}"
                class="form-control">
            <input type="date" id="date_emprunt" name="date_emprunt" value="{{ $emprunt->quantite_prise }}"
                class="form-control">
            <input type="submit" value="modifier" class="btn btn-primary">
        </form>
    </div>
@endsection
