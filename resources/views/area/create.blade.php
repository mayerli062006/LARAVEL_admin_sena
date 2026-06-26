@extends('layouts.app')

@section('content')

<h1>holaa</h1>
    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <button type="submit">Enviar Formulario:</button>
    </form>


    @endsection