
@extends('layouts.app')

@section('content')
  <h1>formulario computer</h1>
    <form action="{{route('computer.completado')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Numero:
            <br>
            <input type="number" name="numero">
        </label>
        <br>
        <label>
            Marca:
            <br>
            <input type="text" name="marca">
        </label>
        <br>
        <button type="submit">Enviar Formulario:</button>
    </form>
@endsection