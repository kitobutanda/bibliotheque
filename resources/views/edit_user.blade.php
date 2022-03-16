@extends('layout.index')
@section('contenu')
    <div class="container">
        <form action="" method="post" class="mt-5 pt-5">
            <input type="hidden" id="id" name="name">
            <label for="">username</label>
            <input type="text" class="form-group" id="username" name="username">
            <label for="">nom</label>
            <input type="text" class="form-group" id="noms" name="noms">
            <label for="">password</label>
            <input type="password" class="form-group" id="password" name="password">
        </form>
    </div>
@endsection
