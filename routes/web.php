<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManuDTIController;
use App\Http\Controllers\ManuPREDIALController;
use App\Http\Controllers\OcorrenciasController;
use Illuminate\Http\Request;
use App\Models\ManuDTI;
use App\Models\ManuPREDIAL;
use App\Models\Ocorrencias;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $login = 'permitido';
    return view('welcome', compact('login'));
});
Route::get('/d', function () {

    $status = 'on';
    return view('FormDTI', compact('status'));
});
Route::get('/p', function () {

    $status = 'on';
    return view('FormPredial', compact('status'));
});
Route::get('/o', function () {

    $status = 'on';
    return view('FormOcorrencias', compact('status'));
});
Route::get('/i', function () {
    return view('info');
});
Route::get('/l', function () {
    return view('telalogin');
});
Route::get('/mo', function () {
    return view('minhas-o');
});
Route::get('/hdti', function () {
    return view('HomeDTI');
});
Route::get('/hpredial', function () {
    return view('HomePredial');
});

Route::get('/tdti', [ManuDTIController::class, 'index']);

Route::get('/tpredial', [ManuPREDIALController::class, 'index']);

Route::get('/todti', [OcorrenciasController::class, 'index_dti']);

Route::get('/topredial', [OcorrenciasController::class, 'index_predial']);
Route::get('/hu', function () {
    return view('HomeUsuario');
});


Route::post('/ManuDTI', [ManuDTIController::class, 'create']);

Route::post('/ManuPredial', [ManuPREDIALController::class, 'create']);

Route::post('/Ocorrencia', [OcorrenciasController::class, 'create']);

Route::post('/Login', function(Request $request){
    $ad =$request->AD;

    switch ($ad){
        case 2848: return redirect('/hu');
        break;
        case 1111: return redirect('/hdti');
        break;
        case 2222: return redirect('/hpredial');
        break;
        default: 
            $login = 'negado';
            return view('welcome', compact('login'));
        break;
    } 
});