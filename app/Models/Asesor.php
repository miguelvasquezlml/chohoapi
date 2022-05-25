<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Asesor extends Model{
    protected $table = "asesor";
    protected $primaryKey = 'id_asesor';

    protected $fillable = [
        'codigo_asesor',
        'id_asesor',
        'nombre_asesor'
    ];

    protected $hidden = [
        'id_asesor'
    ];

    // funcion que relacion el asesor con sus clientes
    public function cliente() {
        return $this
            ->belongsToMany(Cliente::class, 'asesor_cliente', 'id_asesor', 'id_cliente')
            ->with(['pedido'])
            ->withCount('pedido as total_pedidos');
    }

    
}