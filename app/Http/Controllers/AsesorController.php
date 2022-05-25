<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesor;

class AsesorController extends Controller{

    public function getDatosAsesor($id){
        
        // Consultando los datos de un asesor por la variable $id
        
        $asesor = Asesor::with(['cliente'])
            ->withCount('cliente as clientes_asignados')
            ->firstWhere('id_asesor',$id)
            ->toArray();
            
        return response()->json($asesor);
    }

}