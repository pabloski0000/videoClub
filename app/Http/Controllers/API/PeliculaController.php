<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pelicula;
<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Http\Resources\PeliculaResource;
=======
use App\Http\Resources\PeliculaResource;
use Illuminate\Http\Request;
>>>>>>> 5cf86a5edf52ad668283288db0e80b89829f2f26
use Illuminate\Support\Facades\Http;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return new PeliculaResource(Pelicula::paginate());
    }

    public function search($search){
=======
        return PeliculaResource::collection(Pelicula::paginate());
    }

    /**
     * Display a listing of the resource.
     *
     * @param  String  $search
     * @return \Illuminate\Http\Response
     */
    public function search($search)
    {

>>>>>>> 5cf86a5edf52ad668283288db0e80b89829f2f26
        $host = 'www.omdbapi.com';
        $response = Http::get('http://' . $host . '/', [
            'apikey' => env('OMDBAPI_KEY'),
            's' => $search,
            'page' => 1,
            'r' => 'json'
        ]);
<<<<<<< HEAD

=======
>>>>>>> 5cf86a5edf52ad668283288db0e80b89829f2f26
        return response()->json(json_decode($response));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $pelicula = Pelicula::create(json_decode($request->getContent(), true));
=======

        $pelicula = json_decode($request->getContent(), true);

        $pelicula = Pelicula::create($pelicula);
>>>>>>> 5cf86a5edf52ad668283288db0e80b89829f2f26

        return new PeliculaResource($pelicula);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        return new PeliculaResource($pelicula);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
<<<<<<< HEAD
        $pelicula->update(json_decode($request->getContent(), true));
=======
        $peliculaData = json_decode($request->getContent(), true);
        $pelicula->update($peliculaData);
>>>>>>> 5cf86a5edf52ad668283288db0e80b89829f2f26

        return new PeliculaResource($pelicula);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
    }
}
