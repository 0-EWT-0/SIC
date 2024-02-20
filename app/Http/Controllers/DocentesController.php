<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function index(){
        return view('pagina1');
    }
}
