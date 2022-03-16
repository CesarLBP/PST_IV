<?php

namespace Database\Seeders;

use App\Models\Historial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Pagination\Cursor;

class HistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$historial = new Historial();

        $historial->nombre = "Cesar";
        $historial->apellido = "Bracho";
        $historial->descripcion = "Olaf q ashe";

        $historial->save();

        $historial2 = new Historial();

        $historial2->nombre = "Cesar";
        $historial2->apellido = "Bracho";
        $historial2->descripcion = "Olaf q ashe";

        $historial2->save();

        $historial3 = new Historial();

        $historial3->nombre = "Cesar";
        $historial3->apellido = "Bracho";
        $historial3->descripcion = "Olaf q ashe";

        $historial3->save();
        */

        Historial::factory(50)->create();
    }
}
