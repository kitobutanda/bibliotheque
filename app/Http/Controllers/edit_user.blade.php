@extends('layout.index')
@section(contenu)
<form action="" method="post">
    @csrf
   <input type="hidden" id="id" name="id">
    <label for="">usename</label>
    <input type="text" class="form-group" id="username" name="username">
    <label for="">name</label>
    <input type="text" class="form-group" id="name" name="name">
    <label for="">password</label>
    <input type="password" class="form-group" id="password" name="password">
</form>
@endsection