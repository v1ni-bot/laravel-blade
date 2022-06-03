<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OcorrenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_dti()
    {
        $odti = DB::table('ocorrencias')->where('tipo', 'dti')->get();
 
        return view('TabelaODTI', compact('odti'));
    }

    public function index_predial(){
        $opredial = DB::table('ocorrencias')->where('tipo', 'predial')->get();
 
        return view('TabelaOPredial', compact('opredial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Ocorrencias::create([
            'setor' =>$request->setor,
            'tipo' =>$request->tipo,
            'local' =>$request->local,
            'description' =>$request->description,
            ]);
        
        $status = 'success';
        return view('FormOcorrencias', compact('status'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ocorrencias  $ocorrencias
     * @return \Illuminate\Http\Response
     */
    public function show(Ocorrencias $ocorrencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ocorrencias  $ocorrencias
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocorrencias $ocorrencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ocorrencias  $ocorrencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ocorrencias $ocorrencias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ocorrencias  $ocorrencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocorrencias $ocorrencias)
    {
        //
    }
}
