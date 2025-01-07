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
        // Obtenemos todos los productos paginados de 30 en 30
        $productos = Producto::paginate(30);
        return response()->json($productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos los datos del producto
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric|min:0|max:999999.99',
            'categoria' => 'required|in:bazar,suelto,perfumeria',
            'cantidad' => 'required|integer|min:0',
            'unidad' => 'required|in:unidad,kilo,litro',
        ]);

        // Creamos un nuevo producto
        $producto = Producto::create($request->all());

        // Devolvemos el producto creado con un código de respuesta 201 (creado con exito)
        return response()->json($producto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
