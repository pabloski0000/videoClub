<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CatalogController extends Controller
{
    public function getIndex(){
        $usuarios = User::all();
        return view('catalog.index', array('arrayPeliculas' => $this->arrayPeliculas,
        'arrayUsuarios' => $usuarios));
    }

    private $arrayPeliculas = array(
        array(
            'title' => 'hola'
        )
    )
}
