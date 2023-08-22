<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro = Libro::paginate(10); 
        return view('Libros.index')->with('libros',$libro);
    }

    public function create()
    {
        return view('Libros.create');

    }

    
    public function store(Request $request)
    {
        

        

        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i', 
            'autor'=>'required|regex:/[A-Z][a-z]+/i', 
            'editorial'=>'required|regex:/[A-Z][a-z]+/i', 
            'anio_publicacion'=>'required|numeric:lib$libros|regex:/[0-9]{4}/',
            'cantidad_disponible'=>'required|numeric:lib$libros|regex:/[0-9]/',
            
        ]);
        
        $libro = new Libro();
        $libro->titulo=$request->input('titulo');
        $libro->autor=$request->input('autor');
        $libro->editorial=$request->input('editorial');
        $libro->anio_publicacion=$request->input('anio_publicacion');
        $libro->cantidad_disponible=$request->input('cantidad_disponible');

        $libro->save();

        return redirect()->route('libro.index');

    }

    




    public function show(string $id)
    {
        $libro = Libro::findOrfail($id);
        return view('Libros.show' , compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libro = Libro::findOrfail($id);
        return view('Libros.edit')->with('libro', $libro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $libro = Libro::findOrfail($id);

        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i', 
            'autor'=>'required|regex:/[A-Z][a-z]+/i', 
            'editorial'=>'required|regex:/[A-Z][a-z]+/i', 
            'anio_publicacion'=>'required|numeric:lib$libros|regex:/[0-9]{4}/',
            'cantidad_disponible'=>'required|numeric:lib$libros|regex:/[0-9]/',
            
        ]);
        
        
        $libro->titulo=$request->input('titulo');
        $libro->autor=$request->input('autor');
        $libro->editorial=$request->input('editorial');
        $libro->anio_publicacion=$request->input('anio_publicacion');
        $libro->cantidad_disponible=$request->input('cantidad_disponible');

        $libro->save();

        return redirect()->route('libro.index');
    }

    
    public function destroy(string $id)
    {
        

        Libro::destroy($id);

        return redirect()->route('libro.index');


    }

    public function buscar(Request $request)
    {
        $query = $request->input('q');
        
        $libros = Libro::where('id', 'LIKE', "%$query%")
            ->orWhere('titulo', 'LIKE', "%$query%")
            ->orWhere('autor', 'LIKE', "%$query%")
            ->orWhere('editorial', 'LIKE', "%$query%")
            ->orWhere('anio_publicacion', 'LIKE', "%$query%")
            ->orWhere('cantidad_disponible', 'LIKE', "%$query%")
            ->paginate(10);
        
        return view('Libros.index', compact('libros'));
    }
}
