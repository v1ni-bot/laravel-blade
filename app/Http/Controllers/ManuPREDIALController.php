<?php

namespace App\Http\Controllers;

use App\Models\ManuPREDIAL;
use Illuminate\Http\Request;

class ManuPREDIALController extends Controller
{
    private $objPredial;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->objPredial=new ManuPREDIAL();
    }


    public function index()
    {
        $predial=$this->objPredial->all();
        return view('tabelapredial', compact('predial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        ManuPREDIAL::create([
            'setor' =>$request->setor,
            'manutencao' =>$request->manutencao,
            'prioridade' =>$request->prioridade,
            'local' =>$request->local,
            'description' =>$request->description,
            ]);

        $status = 'success';
        return view('FormPredial', compact('status'));
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
     * @param  \App\Models\ManuPREDIAL  $manuPREDIAL
     * @return \Illuminate\Http\Response
     */
    public function show(ManuPREDIAL $manuPREDIAL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManuPREDIAL  $manuPREDIAL
     * @return \Illuminate\Http\Response
     */
    public function edit(ManuPREDIAL $manuPREDIAL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManuPREDIAL  $manuPREDIAL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManuPREDIAL $manuPREDIAL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManuPREDIAL  $manuPREDIAL
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManuPREDIAL $manuPREDIAL)
    {
        //
    }
}
