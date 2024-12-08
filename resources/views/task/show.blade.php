@extends('layouts.app')

@section('content')
<a href="{{ route('task.index') }}">Atras</a>
<h1>{{ $task->title }}</h1>
<p>{{ $task->description }}</p>
@endsection