@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Tarea</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" required>
        <br>
        <label for="description">Descripción:</label>
        <textarea name="description"></textarea>
        <br>
        <button type="submit">Guardar Tarea</button>
    </form>
    <br>
    <a href="{{ route('tasks.index') }}">Volver</a>
@endsection
