@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Atras</a>

<form action="{{ route('note.update', $note->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ $note->title }}"/>
    </div>

    <div>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" value="{{ $note->description }}"/>
    </div>

    <input type="submit" value="Update"/>
</form>
@endsection