@extends('layouts.app')

@section('content')
<a href="{{ route('task.create') }}">Crear new task</a>
    <ul>
      @forelse ($tasks as $task)
          <li>
              <a href="{{ route('task.show', $task->id) }}">{{ $task->title }}</a> 
              - <a href="{{ route('task.edit', $task->id) }}">Editar</a>
              - <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar">
                </form>
          </li>
      @empty
          <p>no data</p>
      @endforelse      
    </ul>    
@endsection