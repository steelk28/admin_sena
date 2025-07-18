@extends('layouts.app')

@section('contenido')
<form action="{{ route('apprentices.update', $apprentice->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre:</label>
    <input type="text" name="name" value="{{ $apprentice->name }}">
    <button type="submit">Actualizar</button>
</form>
@endsection
