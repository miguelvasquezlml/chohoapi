<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pedidos;
use DB;


class Cliente extends Model{
   
    protected $table = "public.cliente";
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;
    // protected $fillable = [];

    // public $timestamps = false;
    protected $hidden = [
        'pivot'
    ];

      // funcion que relacion al cliente con sus pedidos
    public function pedido(){
       return $this->hasMany(Pedidos::class, 'id_cliente', 'id_cliente')
        ->with(['productos'])
        ->withCount('productos as total_productos')
        ->withSum('productos as total_Pedido','total');
    }


    
}
