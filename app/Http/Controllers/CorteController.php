<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corte;

class CorteController extends Controller
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
        $cortes = Corte::all();
        return view('corte.index')->with('cortes', $cortes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('corte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cortes = new Corte();
        $cortes-> folio = $request->get('folio');
        $cortes-> fecha = $request->get('fecha');
        $cortes-> ingresos = $request->get('ingresos');
        $cortes-> egresos = $request->get('egresos');
        $cortes-> total = $request->get('total');

        $cortes->save();

        return redirect('/cortes');
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
        $corte = Corte::find($id);
        return view('corte.edit')->with('corte', $corte);
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
        $corte = Corte::find($id);

        $corte-> folio = $request->get('folio');
        $corte-> fecha = $request->get('fecha');
        $corte-> ingresos = $request->get('ingresos');
        $corte-> egresos = $request->get('egresos');
        $corte-> total = $request->get('total');

        $corte->save();

        return redirect('/cortes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $corte = Corte::find($id);
        $corte-> delete();
        return redirect('/cortes');
    }
}
