@extends('layout.index')
@section('contenu')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <title>edit livre</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>

    <body>
    @section('contenu')
        <div class="container">
            <div class="container mt-5 pt-5">
                <form action="{{ Route('livre.update') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $livres->id }}" name="id">
                    <input type="text" class="form-control" value="{{ $livres->matricule }} " name="matricule"
                        placeholder="entre le matricule " id="matricule"> <br>
                    <input type="text" class="form-control" value="{{ $livres->titre }} " name="titre"
                        placeholder="entre le titre du livre " id="titre"> <br>
                    <input type="text" class="form-control" value="{{ $livres->edition }} " name="edition"
                        placeholder="entre l'edition" id="edition"> <br>
                    <input type="text" class="form-control" value="{{ $livres->domaine }} " name="domaine"
                        placeholder="entre le domaine" id="domaine"> <br>
                    <input type="text" class="form-control" value="{{ $livres->auteur }} " name="auteur"
                        placeholder="entre l'auteur" id="auteur"> <br>
                    <input type="number" min="1" class="form-control" value="{{ $livres->quantite }} " name="quantite"
                        placeholder="entre la quantite" id="quantite"> <br>
                    <input type="text" class="form-control" value="{{ $livres->resume }} " name="resume"
                        placeholder="entre un resume" id="resume"> <br>
                    <input type="date" name="date_publication" value="{{ $livres->date_publication }} "
                        id="date_publication">
                    <input type="text" class="form-control" value="{{ $livres->responsable }} " name="responsable"
                        placeholder="entre le responsable" id="responsable"> <br>
                    <input type="submit" value="Modifier" class="btn btn-primary">
                </form>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>

    </body>

    </html>


@endsection
