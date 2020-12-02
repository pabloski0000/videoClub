<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prueba;

class PruebaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prueba::truncate();
        $prueba = new Prueba();
        $prueba->nombre = 'Pablo';
        $prueba->votos = 2;
        $prueba->email = 'hola@gmail.com';
        $prueba->save();
    }
}
