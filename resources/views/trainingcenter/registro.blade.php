
@extends('layouts.app')

@section('content')

<h1>Formulario trainingCenter</h1>
    <form action="{{route('trainingcenter.salidas')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Ubicacion:
            <br>
            <input type="text" name="location">
        </label>
        <br>
        <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>

@endsection