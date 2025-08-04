<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'marcas_id' => 'required|exists:marcas,id'
        ]);

        $producto = Producto::create($request->all());

        return response()->json([
            'mensaje' => 'Producto creado exitosamente',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::with('marca')->find($id);

        if (!$producto) {
            return response()->json(
                [
                    'mensaje' => 'Producto no encontrado'
                ],
                404
            );
        }

        return response()->json($producto);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(
                [
                    'mensaje' => 'Producto no encontrado'
                ],
                404
            );
        }

        $request->validate([
            'nombre' => 'sometimes|required',
            'precio' => 'sometimes|required|numeric|min:0',
            'marcas_id' => 'sometimes|required|exists:marcas,id'
        ]);

        $producto->update($request->all());

        return response()->json(
            [
                'mensaje' => 'Producto actualizado correctamente',
                'producto' => $producto->load('marca')
            ],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(
                [
                    'mensaje' => 'Producto no encontrado'
                ],
                404
            );
        }

        $producto->delete();
        return response()->json(
            [
                'mensaje' => 'Producto eliminado correctamente',
            ],
            200
        );
    }
}
