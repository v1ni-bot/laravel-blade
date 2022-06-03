<?php

namespace App\Http\Controllers;

use App\Models\ManuDTI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManuDTIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dti = DB::table('manu_d_t_i_s')->get();
 
        return view('tabeladti', compact('dti'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        ManuDTI::create([
            'setor' =>$request->setor,
            'manutencao' =>$request->manutencao,
            'prioridade' =>$request->prioridade,
            'local' =>$request->local,
            'description' =>$request->description,
            ]);

        $status = 'success';
        return view('FormDTI', compact('status'));
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
     * @param  \App\Models\ManuDTI  $manuDTI
     * @return \Illuminate\Http\Response
     */
    public function show(ManuDTI $manuDTI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManuDTI  $manuDTI
     * @return \Illuminate\Http\Response
     */
    public function edit(ManuDTI $manuDTI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManuDTI  $manuDTI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManuDTI $manuDTI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManuDTI  $manuDTI
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManuDTI $manuDTI)
    {
        //
    }
}
