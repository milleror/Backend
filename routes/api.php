<?php

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Pcontrol;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get("/Consulta", [Pcontrol::class, 'read']);
Route::post("/Nuevo_r", [Pcontrol::class, 'create']);
Route::put("/Actuar", [Pcontrol::class, 'update']);
Route::delete("/Borra", [Pcontrol::class, 'delete']);



Route::get("/saludo", function (Request $request) {
    $message = ['mensaje' => "hola mundo Miller"];
    return response()->json($message);
});
