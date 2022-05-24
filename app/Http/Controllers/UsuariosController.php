<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios'] = Usuarios::paginate(5);
        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
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
            
            'nombre'=>'required|string|max:100',
            'apellidos'=>'required|string|max:100',
            'num_miembros'=>'required|integer|max:10',
            'email'=>'required|string',
            'telefono'=>'required|integer|max:15',
            'preferencia'=>'required|string|max:2',
            'tipo'=>'required|string|max:20',
            'contraseña'=>'required|string|max:1000'

        ];

        $mensaje=[

            'required'=>'El :attribute es requerido',
            'apellidos.required'=>'Los apellidos son requeridos',
            'preferencia.required'=>'La preferencia es requerida',
            'contraseña.required'=>'La contraseña es requerida'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosUsuario = $request->except('_token');
        
        Usuario::insert($datosUsuario);
        return redirect('usuario')->with('mensaje', '¡Usuario agregado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            
            'nombre'=>'required|string|max:100',
            'apellidos'=>'required|string|max:100',
            'num_miembros'=>'required|integer|max:10',
            'email'=>'required|string',
            'telefono'=>'required|integer|max:15',
            'preferencia'=>'required|string|max:2',
            'tipo'=>'required|string|max:20',
            'contraseña'=>'required|string|max:1000'

        ];

        $mensaje=[

            'required'=>'El :attribute es requerido',
            'apellidos.required'=>'Los apellidos son requeridos',
            'preferencia.required'=>'La preferencia es requerida',
            'contraseña.required'=>'La contraseña es requerida'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosUsuario = $request->except(['_token', '_method']);
        
        Usuario::where('id','=',$id)->update($datosUsuario); 

        $usuario=Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario=Usuario::findOrFail($id);
        return redirect('usuario')->with('mensaje', '¡Usuario borrado!');
    }
}
