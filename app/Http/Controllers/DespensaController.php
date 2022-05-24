<?php

namespace App\Http\Controllers;

use App\Models\Despensa;
use Illuminate\Http\Request;

class DespensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['despensas'] = Despensa::paginate(5);
        return view('despensa.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('despensa.create');
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
            'categoria'=>'required|string|max:100',
            'cantidad'=>'required|string|max:100',

        ];

        $mensaje=[

            'required'=>'La :attribute es requerida',
            'nombre.required'=>'El nombre es requerido'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosDespensa = $request->except('_token');
        
        Despensa::insert($datosDespensa);
        return redirect('despensa')->with('mensaje', '¡Alimentos agregados con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Despensa  $despensa
     * @return \Illuminate\Http\Response
     */
    public function show(Despensa $despensa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Despensa  $despensa
     * @return \Illuminate\Http\Response
     */
    public function edit($id_producto)
    {
        //
        $despensa=Despensa::findOrFail($id_producto);
        return view('despensa.edit', compact('despensa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Despensa  $despensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_usuario)
    {
        //

        $campos=[
            
            'nombre'=>'required|string|max:100',
            'categoria'=>'required|string|max:100',
            'cantidad'=>'required|string|max:100',

        ];

        $mensaje=[

            'required'=>'La :attribute es requerida',
            'nombre.required'=>'El nombre es requerido'

        ];

        $this->validate($request, $campos, $mensaje);

        $datosDespensa = $request->except('_token');
        
        Despensa::where('id_usuario','=',$id_usuario)->update($datosDespensa); 

        $despensa=Despensa::findOrFail($id_usuario);
        return view('despensa.edit', compact('despensa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Despensa  $despensa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despensa $despensa)
    {
        //
    }
}
