<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catergoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        return Inertia::render('Categorias/Index', [
            'categorias' => Categoria::withCount('productos')->paginate(10)
        ]);
        
        }
        

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Categorias/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request) {

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            ]);
            Categoria::create($request->all());
            return redirect()->route('categorias.index');
        }
        
        

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
    return Inertia::render('Categorias/Edit', ['categoria' => $categoria]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
    $categoria->update($request->all());
    return redirect()->route('categorias.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
    $categoria->delete();
    return redirect()->route('categorias.index');
    }
    
}
