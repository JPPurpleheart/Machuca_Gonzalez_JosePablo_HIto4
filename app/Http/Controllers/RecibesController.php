<?php

namespace App\Http\Controllers;

use App\Models\Recibes;
use Illuminate\Http\Request;

class RecibesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['recibes'] = Recibes::paginate(5);
        return view('recibe.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('recibe.create');
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
     * @param  \App\Models\Recibes  $recibes
     * @return \Illuminate\Http\Response
     */
    public function show(Recibes $recibes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recibes  $recibes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_usuario)
    {
        //
        $recibe=Recibes::findOrFail($id_usuario);
        return view('recibe.edit', compact('recibe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recibes  $recibes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recibes $recibes)
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
     * @param  \App\Models\Recibes  $recibes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recibes $recibes)
    {
        //
    }
}
