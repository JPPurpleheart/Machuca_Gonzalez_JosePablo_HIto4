<?php

namespace App\Http\Controllers;

use App\Models\Ropero;
use Illuminate\Http\Request;

class RoperoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['roperos'] = Ropero::paginate(5);
        return view('ropero.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ropero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos=[
            
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Foto'=>'required|max:1000|mimes:jpeg,png,jpg',

        ];

        $mensaje=[

            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La Foto es requerida'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = $request->except('_token');
        
        Empleado::insert($datosEmpleado);
        return redirect('empleado')->with('mensaje', '¡Empleado agregado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ropero  $ropero
     * @return \Illuminate\Http\Response
     */
    public function show(Ropero $ropero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ropero  $ropero
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ropa)
    {
        //
        $ropero=Ropero::findOrFail($id_ropa);
        return view('ropero.edit', compact('ropero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ropero  $ropero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ropero $ropero)
    {
        //

        $campos=[
            
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Foto'=>'required|max:1000|mimes:jpeg,png,jpg',

        ];

        $mensaje=[

            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La Foto es requerida'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = $request->except(['_token', '_method']);
        
        Empleado::where('id','=',$id)->update($datosEmpleado); 

        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ropero  $ropero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ropero $ropero)
    {
        //
        $empleado=Empleado::findOrFail($id);

        if(Storage::delete('public/'.$empleado->Foto)){

            Empleado::destroy($id);

        }
        return redirect('empleado')->with('mensaje', '¡Empleado borrado!');
    }
}
