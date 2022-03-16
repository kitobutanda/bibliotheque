@extends('layout.index')
@section('contenu')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>stock</title>
    </head>

    <body>
        <div class="container pt-5 mt-5">
            <table class="table-bordered">
                <thead>
                    <th>Numero</th>
                    <th>Stock</th>
                </thead>
                <tbody>
                    @foreach ($stock as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->quantite }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>

    </html>
@endsection
