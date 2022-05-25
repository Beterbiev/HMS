<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = Expediente::all();
        return view('expediente.index')->with('expedientes', $expedientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expediente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expedientes = new Expediente();
        $expedientes-> id = $request->get('id');
        $expedientes-> nombre = $request->get('nombre');
        $expedientes-> apellido = $request->get('apellido');
        $expedientes-> direccion = $request->get('direccion');
        $expedientes-> telefono = $request->get('telefono');
        $expedientes-> fecha_ingreso = $request->get('fecha_ingreso');
        $expedientes-> fecha_egreso = $request->get('fecha_egreso');
        $expedientes-> peso = $request->get('peso');
        $expedientes-> altura = $request->get('altura');

        $expedientes->save();

        return redirect('/expedientes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expediente = Expediente::find($id);
        return view('expediente.edit')->with('expediente', $expediente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $expediente = Expediente::find($id);
        
        $expediente-> id = $request->get('id');
        $expediente-> nombre = $request->get('nombre');
        $expediente-> apellido = $request->get('apellido');
        $expediente-> direccion = $request->get('direccion');
        $expediente-> telefono = $request->get('telefono');
        $expediente-> fecha_ingreso = $request->get('fecha_ingreso');
        $expediente-> fecha_egreso = $request->get('fecha_egreso');
        $expediente-> peso = $request->get('peso');
        $expediente-> altura = $request->get('altura');

        $expediente->save();

        return redirect('/expedientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expediente = Expediente::find($id);
        $expediente-> delete();
        return redirect('/expedientes');

    }
}
