<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['empleados'] = Empleado::paginate(5);
        return view('empleado.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos = [
            'Nombres' => 'required|String|max:100',
            'Apellidos' => 'required|String|max:100',
            'Identificacion' => 'required|String|max:100',
            'Telefono' => 'required|String|max:100',
            'Ciudad' => 'required|String|max:100',
            'Departamento' => 'required|String|max:100',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',

        ];

        $this->validate($request, $campos, $mensaje);

        //
        // $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');
        Empleado::insert($datosEmpleado);
        // return response()->json($datosEmpleado);

        return redirect('empleado')->with('mensaje', 'Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // 
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'Nombres' => 'required|String|max:100',
            'Apellidos' => 'required|String|max:100',
            'Identificacion' => 'required|String|max:100',
            'Telefono' => 'required|String|max:100',
            'Ciudad' => 'required|String|max:100',
            'Departamento' => 'required|String|max:100',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',

        ];

        $this->validate($request, $campos, $mensaje);

        //
        $datosEmpleado = request()->except(['_token', '_method']);
        Empleado::where('id', '=', $id)->update($datosEmpleado);

        return redirect('empleado')->with('mensaje', 'Empleado modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Empleado::destroy($id);
        return redirect('empleado')->with('mensaje', 'Empleado eliminado con exito');
    }
}
