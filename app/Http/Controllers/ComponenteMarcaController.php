<?php

namespace App\Http\Controllers;

use App\Models\ComponenteMarca;
use App\Models\Componente;
use App\Models\Marca;
use Illuminate\Http\Request;

class ComponenteMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = ComponenteMarca::all();

        return view('componenteMarca.index', compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('componenteMarca.create')->with('componentes', Componente::all())->with('marcas', Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'componente_id' => 'required',
            'marca_id' => 'required',
            'cantidad' => 'required'
        ]);

        ComponenteMarca::create($request->all());

        return redirect()->route('formulario.index')
            -> with('success', 'ComponenteMarca creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComponenteMarca  $componenteMarca
     * @return \Illuminate\Http\Response
     */
    public function show(ComponenteMarca $componenteMarca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComponenteMarca  $componenteMarca
     * @return \Illuminate\Http\Response
     */
    public function edit($componenteMarca_id)
    {
        $componente = ComponenteMarca::find($componenteMarca_id);
        return view('componenteMarca.edit', compact('componente'))->with('componentes', Componente::all())->with('marcas', Marca::all());;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComponenteMarca  $componenteMarca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'componente_id' => 'required',
            'marca_id' => 'required',
            'cantidad' => 'required'
        ]);

        $componenteMarca = ComponenteMarca::find($id);
        $componenteMarca->componente_id =  $request->get('componente_id');
        $componenteMarca->marca_id = $request->get('marca_id');
        $componenteMarca->cantidad = $request->get('cantidad');
        $componenteMarca->comentario = $request->get('comentario');
        $componenteMarca->save();

        return redirect()->route('formulario.index')
            ->with('success', 'ComponenteMarca actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComponenteMarca  $componenteMarca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $componenteMarca = ComponenteMarca::find($id);
        $componenteMarca->delete();
        return redirect()->route('formulario.index')
            ->with('success', 'ComponenteMarca eliminado satisfactoriamente.');
    }
}
