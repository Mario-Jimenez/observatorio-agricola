<?php

namespace App\Http\Controllers;

use App\Procedencia;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProcedenciaController extends Controller
{
    public function obtenerProcedencias()
	{
		return Procedencia::select('id', 'nombre')->orderBy('id', 'asc')->get();
	}
}
