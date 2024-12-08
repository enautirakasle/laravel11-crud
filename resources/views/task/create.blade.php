@extends('layouts.app')

@section('content')
<a href="{{ route('task.index') }}">Atras</a>

<form action="{{ route('task.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Título</label>
        <input type="text" name="title" id="title"/>
        @error('title')
        <p style="color: crimson">Error en titulo</p>            
        @enderror
    </div>

    <div>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description"/>
        @error('description')
        <p style="color: crimson">Error en la descripcion</p>            
        @enderror
    </div>

    <input type="submit" value="Create"/>
</form>
@endsection