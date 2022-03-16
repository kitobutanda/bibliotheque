@extends('layout.master')
@section('contenu')
    <div class="container mt-5 pt-5">
        <form method="POST" action="{{ route('emprunt.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="form-control">emprunteur</label>

                </div>
                <div class="col-md-8">
                    <select name="emprunteur" id="emprunteur" class="form-control">
                        <option></option>
                        @foreach ($empr as $item)
                            <option value="{{ $item->nom }}">{{ $item->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="form-control">livre</label>

                </div>
                <div class="col-md-8">
                    <select name="livre_emprunter" id="livre_emprunter" class="form-control">
                        <option></option>
                        @foreach ($combolivre as $item)
                            <option value="{{ $item->titre }}">{{ $item->titre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="" class="form-control">Quantite</label>

                </div>
                <div class="col-md-8">
                    <input type="number" min="1" name="quantite_prise" id="quantite_prise" class="form-control"><br>

                </div>
            </div>
            <!-- <div class="row">
                     <div class="col-md-4">
                     <label for=""class="form-control">Date</label>

                     </div>
                     <div class="col-md-8">
                     <input type="date" name="date_emprunt" id="date_emprunt"class="form-control"><br>

                     </div> -->
    </div>
    <input type="submit" value="enregistrer" class="btn btn-primary off-set-4">
    </form>
    </div>
@endsection
@section('monscript')
    <script>
        $('#Eformulaire').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ Route('emprunt.store') }}',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    alert('insert success');
                    $('#Eformulaire')[0].reset();
                }
            });
        });
    </script>
@endsection
