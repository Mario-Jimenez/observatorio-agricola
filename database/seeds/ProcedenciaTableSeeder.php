<?php

use App\Procedencia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ProcedenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Procedencia::insert([
    		['nombre' => 'CENADA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Feria del Agricultor', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    		['nombre' => 'Subasta Ganadera', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
    		]);
    }
}
