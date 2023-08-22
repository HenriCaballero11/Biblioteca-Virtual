<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamo = Prestamo::paginate(10); 
        return view('Prestamos.index')->with('prestamos',$prestamo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Prestamos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([ 
            'fecha_solicitud'=>'required|numeric|regex:/[0-9]{8}/',
            'fecha_prestamo'=>'required|numeric|regex:/[0-9]{8}/',
            'fecha_devolucion'=>'required|numeric|regex:/[0-9]{8}/',
            'libro_id'=>'required|numeric|regex:/[0-9]/',
            'usuario_id'=>'required|numeric|regex:/[0-9]/',
            
        ]);

    
        $prestamo = new Prestamo();

        $prestamo->fecha_solicitud=$request->input('fecha_solicitud');
        $prestamo->fecha_prestamo=$request->input('fecha_prestamo');
        $prestamo->fecha_devolucion=$request->input('fecha_devolucion');
        $prestamo->libro_id=$request->input('libro_id');
        $prestamo->usuario_id=$request->input('usuario_id');

       $prestamo->save();
       
        return redirect()->route('prestamo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prestamo = Prestamo::findOrfail($id);
        return view('Prestamos.show' , compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prestamo = Prestamo::findOrfail($id);
        return view('Prestamos.edit')->with('prestamo', $prestamo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([ 
            'fecha_solicitud' => 'required|numeric|regex:/[0-9]{8}/',
            'fecha_prestamo' => 'required|numeric|regex:/[0-9]{8}/',
            'fecha_devolucion' => 'required|numeric|regex:/[0-9]{8}/',
            'libro_id' => 'required|numeric|regex:/[0-9]/',
            'usuario_id' => 'required|numeric|regex:/[0-9]/',
        ]);
    
        $prestamo = Prestamo::findOrFail($id);
    
        $prestamo->fecha_solicitud = $request->input('fecha_solicitud');
        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamo->libro_id = $request->input('libro_id');
        $prestamo->usuario_id = $request->input('usuario_id');
    
        $prestamo->save();
    
        return redirect()->route('prestamo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prestamo::destroy($id);

        return redirect()->route('prestamo.index');
    }


    public function buscar(Request $request)
    {
        $query = $request->input('q');
        
        $prestamos = Prestamo::where('id', 'LIKE', "%$query%")
            ->orWhere('fecha_solicitud', 'LIKE', "%$query%")
            ->orWhere('fecha_prestamo', 'LIKE', "%$query%")
            ->orWhere('fecha_devolucion', 'LIKE', "%$query%")
            ->orWhere('libro_id', 'LIKE', "%$query%")
            ->orWhere('usuario_id', 'LIKE', "%$query%")
            ->paginate(10);
        
        return view('Prestamos.index', compact('prestamos'));
    }
}
