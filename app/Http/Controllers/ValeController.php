<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vale;

class ValeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vales = Vale::all();
        return view('vale.index')->with('vales', $vales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vales = new Vale();
        $vales-> folio = $request->get('folio');
        $vales-> fecha = $request->get('fecha');
        $vales-> nombre = $request->get('nombre');
        $vales-> descripcion = $request->get('descripcion');
        $vales-> medico = $request->get('medico');
        $vales-> total = $request->get('total');

        $vales->save();

        return redirect('/vales');
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
        $vale = Vale::find($id);
        return view('vale.edit')->with('vale', $vale);
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
        $vale = Vale::find($id);

        $vale-> folio = $request->get('folio');
        $vale-> fecha = $request->get('fecha');
        $vale-> nombre = $request->get('nombre');
        $vale-> descripcion = $request->get('descripcion');
        $vale-> medico = $request->get('medico');
        $vale-> total = $request->get('total');

        $vale->save();

        return redirect('/vales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vale = Vale::find($id);
        $vale-> delete();
        return redirect('/vales');
    }
}
