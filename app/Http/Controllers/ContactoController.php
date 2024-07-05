<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function mostrarcontacto(){
        return view('vercontacto');
    }

    public function agregarcontacto(){
        return view('agregarcontacto');
    }

    public function buscarcontacto(){
        return view('buscar');
    }

    public function vercontacto(){
        return view('vercontacto');
    }

    public function eliminarcontacto(){
        return view('eliminar');
    }
}
