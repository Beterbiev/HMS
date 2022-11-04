<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificado;

class CertificadoController extends Controller
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
        $certificados = Certificado::all();
        return view('certificado.index')->with('certificados', $certificados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificados = new Certificado();
        $certificados-> folio = $request->get('folio');
        $certificados-> fecha = $request->get('fecha');
        $certificados-> nombre = $request->get('nombre');
        $certificados-> medico = $request->get('medico');

        $certificados->save();

        return redirect('/certificados');
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
        $certificado = Certificado::find($id);
        return view('certificado.edit')->with('certificado', $certificado);
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
        $certificado = Certificado::find($id);

        $certificado-> folio = $request->get('folio');
        $certificado-> fecha = $request->get('fecha');
        $certificado-> nombre = $request->get('nombre');
        $certificado-> medico = $request->get('medico');

        $certificado->save();

        return redirect('/certificados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificado = Certificado::find($id);
        $certificado-> delete();
        return redirect('/certificados');
    }
}
