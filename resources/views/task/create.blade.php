@extends('layouts.app')

@section('content')
<a href="{{ route('task.index') }}">Atras</a>

<form action="{{ route('task.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Título</label>
        <input type="text" name="title" id="title"/>
    </div>

    <div>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description"/>
    </div>

    <input type="submit" value="Create"/>
</form>
@endsection