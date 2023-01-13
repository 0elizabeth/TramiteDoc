<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Documento;
use App\Models\Tdocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $documentos= Documento::all();
        return view('Documentos.documentos.index', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $documentos = Documento::all();
        $tdocumento = Tdocumento::pluck('nombre','id')->toArray();
        $cliente = Cliente::pluck('nombre','id')->toArray();
        return view('Documentos.documentos.create', compact('documentos','cliente','tdocumento'));
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
/*         dd($request->all()); */
        $documento= new Documento();
        $documento->asunto = $request->asunto;
        $documento->estado = $request->estado;
        $documento->folio = $request->folio;
        $documento->tdocumento_id = $request-> tdocumento_id;
        $documento->cliente_id = $request->cliente_id;
        $documento->save();
        return Redirect::route('Documentos.documentos.index');
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
        //
        $documento = Documento::findOrFail($id);
/*         $tdocumentos = Tdocumento::pluck('nombre')->toArray(); */
        $cliente = Cliente::pluck('nombre')->toArray();

        return view('Documentos.documentos.edit', compact('documento'));
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
        //
        $documento= new Documento();
        $documento->asunto = $request->asunto;
        $documento->estado = $request->estado;
        $documento->folio = $request->folio;
/*         $documento->tdocumento_id = $request->tdocumento_id; */
        $documento->cliente_id = $request->cliente_id;
        $documento->save();
        return Redirect::route('Documentos.documentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $documento = Documento::findOrFail($id);
        $documento->delete();
        return Redirect::route('Documentos.documentos.index');
    }
}
