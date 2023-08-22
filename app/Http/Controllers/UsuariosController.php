<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::paginate(10); 
        return view('Usuarios.index')->with('usuarios',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i', 
            'correo_electronico'=>'required|Email',
            'telefono'=>'required|numeric|unique:usuarios|regex:/[0-9]{8}/',
            'direccion'=>'required|regex:/[A-Z][a-z]+/i',
          
        ]);
        
        $usuario = new Usuario();
        $usuario->nombre=$request->input('nombre');
        $usuario->correo_electronico=$request->input('correo_electronico');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');

        $usuario->save();

        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::findOrfail($id);
        return view('Usuarios.show' , compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrfail($id);
        return view('Usuarios.edit')->with('usuario', $usuario);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $usuario = Usuario::findOrfail($id);

        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i', 
            'correo_electronico'=>'required|Email',
            'telefono'=>'required|numeric|regex:/[0-9]{8}/',
            'direccion'=>'required|regex:/[A-Z][a-z]+/i',
          
        ]);
        
       
        $usuario->nombre=$request->input('nombre');
        $usuario->correo_electronico=$request->input('correo_electronico');
        $usuario->telefono=$request->input('telefono');
        $usuario->direccion=$request->input('direccion');

        $usuario->save();

        return redirect()->route('usuario.index');





    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    
    {
        Usuario::destroy($id);

        return redirect()->route('usuario.index');

    
 
    }


    public function buscar(Request $request)
    {
        $query = $request->input('q');
        
        $usuarios = Usuario::where('nombre', 'LIKE', "%$query%")
            ->orWhere('correo_electronico', 'LIKE', "%$query%")
            ->orWhere('telefono', 'LIKE', "%$query%")
            ->orWhere('direccion', 'LIKE', "%$query%")
            ->paginate(10); 
        
        return view('Usuarios.index', compact('usuarios'));
    }
}
