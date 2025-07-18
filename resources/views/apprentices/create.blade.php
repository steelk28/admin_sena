@extends('layouts.app')

@section('contenido')

<h2>Registrar aprendiz</h2>

<form action="{{ route('apprentices.store') }}" method="POST">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Celular:</label><br>
    <input type="text" name="cell_number"><br><br>

    <label>Curso:</label><br>
    <select name="course_id">
        @foreach($courses as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endforeach
    </select><br><br>

    <label>Computador:</label><br>
    <select name="computer_id">
        @foreach($computers as $pc)
            <option value="{{ $pc->id }}">{{ $pc->reference }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Guardar</button>
</form>

@endsection

