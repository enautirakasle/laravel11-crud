@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}">Crear new note</a>
    <ul>
      @forelse ($notes as $note)
          <li>
              <a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> 
              - <a href="{{ route('note.edit', $note->id) }}">Editar</a>
              - <form action="{{ route('note.destroy', $note->id) }}" method="POST">
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