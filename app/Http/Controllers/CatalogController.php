<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex(){
        return view('catalog.index', array('arrayPeliculas' => $this->arrayPeliculas));
    }

    private $arrayPeliculas = array(
        array(
            'title' => 'hola'
        )
    )
}
