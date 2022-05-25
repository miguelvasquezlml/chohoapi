<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoDetalleProducto extends Model{
    protected $table = "vproductos_detalle";

    // protected $fillable = [];

    // public $timestamps = false;

    protected $hidden = [
        'id_pedido','pivot'
    ];
}