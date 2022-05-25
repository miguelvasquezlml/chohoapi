<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class PedidoDetalle extends Model{
    protected $table = "pedido_detalle";
    protected $primaryKey = 'id_pedido_detalle';

   
    public function producto() {
        return $this
            ->hasOne(Producto::class, 'id_producto', 'id_producto');
    }
    

}