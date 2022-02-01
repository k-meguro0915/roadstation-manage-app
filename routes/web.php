<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoadStationController;
use App\Http\Controllers\ListRoadStationController;
use App\Http\Controllers\CsvController;

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
Route::get('/',[ListRoadStationController::class,'index']);
Route::get('/create_roadstation',[RoadStationController::class,'index']);
Route::post('/create_roadstation/confirm',[RoadStationController::class,'confirm']);
Route::post('/create_roadstation/store',[RoadStationController::class,'store']);
Route::get('/edit_roadstation/{CID}',[RoadStationController::class,'edit']);
Route::put('/edit_roadstation/update',[RoadStationController::class,'update']);
Route::get('/delete_roadstation/{CID}',[RoadStationController::class,'delete']);

Route::get('/import_csv', [CsvController::class,'index']);
Route::get('/import_csv/confirm',[CsvController::class,'confirm']);