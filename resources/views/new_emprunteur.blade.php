@extends('layout.master')
@section('contenu')
    <div class="container mt-5 pt-5">
        <form id="monformulaire">
            <div class="row">
                <div class="col-md-4">
                    <label for="">nom</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="nom" id="nom"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="">email</label>
                </div>
                <div class="col-md-8">
                    <input type="email" name="email" id="email"><br>
                </div>
            </div>
            <input type="submit" value="enregistrer" class="btn btn-primary offset-5">
        </form>
    </div>
@endsection
@section('monscript')
    <script>
        $('#monformulaire').submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: '{{ Route('emprunteur.store') }}',
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    alert('insert succefully');
                    $('#monformulaire')[0].reset();
                }
            });
        });
    </script>
@endsection
