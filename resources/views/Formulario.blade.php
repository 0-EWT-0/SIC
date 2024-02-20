@extends('plantilla')
@section('titulo')
 Agregar estudiantes
@endsection
@section('contenido')
 <form action="{{url('alumnos')}}" method="POST">
    @csrf
    <input type="text" name="name_student" placeholder="Nombre" value="{{old('name_student')}}">
    @error('name_student')
    <div style="color: red;"> {{$message}}</div>
    @enderror
    <input type="text" name="id_student" placeholder="Matricula">
    <input type="text" name="email_student" placeholder="Correo">
    <input type="text" name="password_student" placeholder="Contrasena">
    <button type="submit">Registrar</button>
 </form>
@endsection