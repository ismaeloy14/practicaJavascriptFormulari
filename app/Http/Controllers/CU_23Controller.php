<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carpeta;
use Notification;

class CU_23Controller extends Controller {

    public function crearCarpeta(Request $request, $id) {
        $permiso=app('App\Http\Controllers\ComprovarPermisos')->comprovarPermis($id);
        if (($permiso=='w')||($permiso=='s')){
            $carpeta = new Carpeta;
            $carpeta->nom = $request->nomCarpeta;
            $carpeta->descripcio = $request->descripcioCarpeta;
            $carpeta->dataCreacio = date('Y-m-d');
            $carpeta->dataModificacio = date('Y-m-d');
            $carpeta->path = "pirula";
            $carpeta->idCarpetaPare = $id;
            $carpeta->save();        
            return redirect('abrirCarpeta/'.$id);
        }else{
            Notification::error("No tens permisos per realitzar aquesta acció.");
            return redirect('abrirCarpeta/'.$id);
        }
        
        
    }

}