<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return 'Mostrando Albumes de usuario';
    }

    public function getCrear()
    {
        return 'Mostrando Formulario de Creacion de Album';
    }

    public function postCrear()
    {
        return 'Almacenando Album en DB';
    }

    public function getActualizar()
    {
        return 'Mostrando Formulario de Actualizacion de Album';
    }

    public function postActualizar()
    {
        return 'Actualizando de Album';
    }

    public function postEliminar()
    {
        return 'Eliminando Album';
    }

    public function missingMethod($parameters=array())
    {
        abort(404);
    }
}