<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PedidoDetalle;
use App\Models\PedidoDetalleProducto;
use App\Models\Producto;
use DB;

class Pedidos extends Model{
    protected $table = "pedido";
    protected $primaryKey = 'id_pedido';

    // protected $fillable = [];
    protected $hidden = [
        'id_pedido','pivot'
    ];

    // funcion que relacion al pedidop con su detalle
    public function productos(){
        return $this
            ->hasMany(PedidoDetalleProducto::class, 'id_pedido', 'id_pedido');
    }

   
}