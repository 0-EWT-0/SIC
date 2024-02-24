<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('Formulario');
    }

    //Logica para insertar datos
    public function store(StudentRequest $request)
    {
        return "Formulario procesado";
    }
}
