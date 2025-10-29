<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{

    // obtener todos los productos
    public function index()
    {
        //
        $products = Product::all();
        //retorna la vista 'products.index' con la lista de productos
        return view('products.index', compact('products'));
    }

    public function create()
    {
        //retornar la vista para crear un nuevo producto
        return view('products.create');

    }

    public function store(Request $request)
    {
        //validar formulario
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        //crear nuevo producto con los datos validos
        Product::create($request->all());
        //redireccionar a la lista de productos con mensaje de exito
        return redirect()->route('products.index')->with('success', 'producto creado.');

    }

    public function show(Product $product)
    {
        //returnar la vista 'products.show' con el producto especifico
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        //retornar la vista 'products.edit' con el producto especifico
        return view('products.edit', compact('product'));
    }

   
    public function update(Request $request, Product $product)
    {
        //validar formulario
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        //actualizar el producto con los datos validos
        $product->update($request->all());
        //redireccionar a la lista de productos con mensaje de exito
        return redirect()->route('products.index')->with('success', 'producto actualizado.');
    }

    public function destroy(Product $product)
    {
        //eliminar el producto especifico
        $product->delete();
        //redireccionar a la lista de productos con mensaje de exito
        return redirect()->route('products.index')->with('success', 'producto eliminado.');
    }
}
