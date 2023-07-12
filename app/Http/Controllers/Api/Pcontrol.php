<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\userempm;


class Pcontrol extends Controller
{
  
  public function READ(Request $request)
  {
    $useremps = new userempm();
    $data = $useremps->all();
    return response()->json($data);
  }


  public function create(Request $request)
  {
      $userempc = new userempm();
  
      $userempc->nombre = $request->input("nombre");
      $userempc->apellido = $request->input("apellido");
      $userempc->tipodoc = $request->input("tipodoc");
      $userempc->documento = $request->input("documento");
      $userempc->cargo = $request->input("cargo");
      $userempc->rol = $request->input("rol");
  
      $userempc->save();
  
      $message = ["message" => "Registro exitoso!"];

      return response()->json($message);
  }

  public function update(Request $request)
  {
      $iduserempc = $request->query("id");
  
      $userempc = new userempm();
  
      $useremup = $userempc->find($iduserempc);
  
      $useremup->nombre = $request->input("nombre");
      $useremup->apellido = $request->input("apellido");
      $useremup->tipodoc = $request->input("tipodoc");
      $useremup->documento = $request->input("documento");
      $useremup->cargo = $request->input("cargo");
      $useremup->rol = $request->input("rol");
  
      $useremup->save();
  
      $message = [
          "message" => "Registro exitoso!",
          "iduserempc" => $request->query("id"),
      ];
  
      return $message;
  }
  
  public function delete(Request $request){
    $iduserempe = $request->query("id");
    $userempel = new userempm();
    $useremuel = $userempel->find($iduserempe);
    $useremuel->delete();
    $message = [
        "message" => "Registro eliminado!!",
        "iduserempe" => $request->query("id"),
    ];
    return $message;
}

  
  

}





