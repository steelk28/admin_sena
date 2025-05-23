@extends('layouts.app')

@section('xd')

<br>
<br>
 <form action="">
    @csrf
    <label for="area">Area</label>
    <input type="text" name="name" id="area">
    <button type="submit">enviar</button>
<br>
<br>
    <a href="{{route('inicio')}}">volver al inicio</a>
</form>
@endsection
