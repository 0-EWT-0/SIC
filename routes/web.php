<?php

use App\Http\Controllers\Student\StudentController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/documnets/{clave}', function ($clave) {
    return view('panel')->with('codigo', $clave);
});

//Al entrar a la ruta alumnos se llamara al controlador, el formulario
Route::get('/alumnos', [StudentController::class, 'index']);

//Almacena los datos
Route::post('/alumnos', [StudentController::class, 'store']);
