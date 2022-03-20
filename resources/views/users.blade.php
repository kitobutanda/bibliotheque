@extends('layout.master')
@section('contenu')
    <div class="container">
        <a href="" class="offset-6 btn btn-primary mb-5">New user</a>
        <div class="table table-bordered table-stripped">
            <table>
                <thead>
                    <th>Numero</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>password</th>
                    <th>Action</th>
                </thead>
                <tbody>
                @foreach($user as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->noms}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->password}}</td>
                        <td></td>
</tr>
                            @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection
