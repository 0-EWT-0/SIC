@extends('plantilla')
@section('titulo')
 Agregar estudiantes
@endsection
@section('contenido')
 <form action="{{url('alumnos')}}" method="POST" class="form_alumnos">
    @csrf
    <h1>Registro</h1>
    <input class="i_nombre_alumno" type="text" name="name_student" placeholder="Nombre" value="{{old('name_student')}}">
    @error('name_student')
    <div style="color: red;"> {{$message}}</div>
    @enderror
    <input class="i_matricula_alumno" type="text" name="id_student" placeholder="Matricula">
    <input class="i_correo_alumno" type="text" name="email_student" placeholder="Correo">
    <input class="i_contrasena_alumno" type="text" name="password_student" placeholder="Contrasena">
    <button class="boton_registro" type="submit">Registrar</button>
 </form>
@endsection
