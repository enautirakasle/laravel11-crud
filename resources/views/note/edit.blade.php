@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Atras</a>

<form action="{{ route('note.update', $note->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ $note->title }}"/>
        @error('title')
            <p style="color: crimson">Error en el titulo</p>
        @enderror
    </div>

    <div>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" value="{{ $note->description }}"/>
        @error('description')
        <p style="color: crimson">Error en la descripcion</p>            
        @enderror
    </div>

    <input type="submit" value="Update"/>
</form>
@endsection