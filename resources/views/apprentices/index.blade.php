@extends('layouts.app')

@section('contenido')
<a href="{{ route('apprentices.create') }}">Nuevo</a>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($apprentices as $a)
    <tr>
        <td>{{ $a->name }}</td>
        <td>
            <a href="{{ route('apprentices.edit', $a->id) }}">Editar</a>
            <form action="{{ route('apprentices.destroy', $a->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection



