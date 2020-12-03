<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Movie;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex()
    {
		return view('catalog.index', array('arrayPeliculas' => Movie::all()));
    }

    public function getShow($id)
    {
    	return view('catalog.show',
    		array(
    			'pelicula' => $this->arrayPeliculas[$id],
    			'id' => $id
    		)
    	);
    }

    public function getCreate()
    {
    	return view('catalog.create');
    }

    public function getEdit($id)
    {
    	return view('catalog.edit', array( 'pelicula' => Movie::FindorFail($id)));
    }

}
