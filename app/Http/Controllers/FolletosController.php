<?php

namespace App\Http\Controllers;

use App\Models\Folletos;
use Illuminate\Http\Request;

class FolletosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['folletos'] = Folletos::paginate(5);
        return view('folleto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
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
     * @param  \App\Models\Folletos  $folletos
     * @return \Illuminate\Http\Response
     */
    public function show(Folletos $folletos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Folletos  $folletos
     * @return \Illuminate\Http\Response
     */
    public function edit(Folletos $folletos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Folletos  $folletos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Folletos $folletos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Folletos  $folletos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Folletos $folletos)
    {
        //
    }
}
