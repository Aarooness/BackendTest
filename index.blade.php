@extends('layouts.app')

@section('content')
    <h1>Lista de Tareas</h1>
    <a href="{{ route('tasks.create') }}">Crear nueva tarea</a>

    @if($tasks->isEmpty())
        <p>No hay tareas registradas.</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->title }} - 
                    <a href="{{ route('tasks.edit', $task->id) }}">Editar</a> | 
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection

