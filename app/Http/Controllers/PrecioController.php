<?php

namespace App\Http\Controllers;

use App\Precio;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrecioController extends Controller
{
    public function obtenerPrecios()
	{
		return Precio::orderBy('id', 'asc')->get();
	}

	public function guardarPrecio(Request $request)
	{
		$precio = new Precio;

		$precio->fecha = $request->input('fecha');
		$precio->precio = $request->input('precio');
		$precio->valor_unidad_venta = $request->input('valor_unidad_venta');
		$precio->id_producto = $request->input('id_producto');
		$precio->id_unidad_venta = $request->input('id_unidad_venta');
		$precio->id_ubicacion_exacta = $request->input('id_ubicacion_exacta');
		$precio->id_procedencia = $request->input('id_procedencia');

		$precio->save();

		return 'Precio guardado correctamente con el id' . $producto->id;
	}

	public function actualizarProducto(Request $request, $id)
	{
		$precio = Precio::find($id);

		$precio->fecha = $request->input('fecha');
		$precio->precio = $request->input('precio');
		$precio->valor_unidad_venta = $request->input('valor_unidad_venta');
		$precio->id_producto = $request->input('id_producto');
		$precio->id_unidad_venta = $request->input('id_unidad_venta');
		$precio->id_ubicacion_exacta = $request->input('id_ubicacion_exacta');
		$precio->id_procedencia = $request->input('id_procedencia');

		$precio->save();

		return 'Precio actualizado correctamente con el id' . $producto->id;
	}

	public function eliminarPrecio($id)
	{
		$precio = Precio::find($id);

		$precio->delete();

		return 'Precio eliminado correctamente con el id' . $id;
	}
}
