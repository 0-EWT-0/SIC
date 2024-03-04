<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Student;
use App\Http\Requests\StudentRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Student;


class RutasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('pagina_protegida');
    }

    public function index()
    {
        return view('formulario');
    }


    public function store(Request $request)
    {
        $student = new \App\Models\Student;
        $student->name_student = $request->input('name_student');
        $student->lastname_student = $request->input('lastname_student');
        $student->id_student = $request->input('id_student');
        $student->birthday = $request->input('birthday');
        $student->comments = $request->input('comments');
        // Asigna otros campos requeridos según tu lógica de negocio

        // Guarda el estudiante en la base de datos
        $student->save();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante registrado correctamente');
    }
    // Aquí podrías agregar métodos para manejar las peticiones a tus rutas protegidas
}
