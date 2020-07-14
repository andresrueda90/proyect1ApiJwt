<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    
  public function ejemploRetorno(Request $request){
    $respuesta = array(
        'Mensaje'=>'El documento se envió correctamente.',
        );
      return response()->json(compact('respuesta'),200);
    }
}
