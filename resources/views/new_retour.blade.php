@extends('layout.index')
@section('contenu')
    <div class="container mt-5 pt-5">
        <form id="formulaire">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-control">emprunteur</label>
                </div>
                <div class="col-md-6">
                    <select name="emprunteur" id="emprunteur" class="form-control">
                        <option></option>
                        @foreach ($retourlivre as $item)
                            <option value="{{ $item->emprunteur }}">{{ $item->emprunteur }}</option>
                            <br>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-control">livre</label>

                </div>
                <div class="col-md-6">
                    <select name="livre" id="livre" class="form-control">
                        <option></option>
                        @foreach ($retourlivre as $item)
                            <option value="{{ $item->livre_emprunter }}">{{ $item->livre_emprunter }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <br><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-control">Quantite</label>
                </div>
                <div class="col-md-6">
                    <input type="number" min="1" name="quantiteR" id="quantiteR" class="form-control"><br>
                </div>
            </div><br><br>
            <div class="row">
                
            </div>
            <br><br>
            <input type="submit" value="enregistrer" class="btn btn-primary off-set-4">
        </form>
    </div>
@endsection
@section('monscript')
    <script>
        $('#formulaire').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ Route('retour.store') }}',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    alert('insertion');
                    $('#formulaire')[0].reset();
                }
            });
        });
    </script>
@endsection
