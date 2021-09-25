<?php
namespace App\Models;

use CodeIgniter\Model;

class Ventas extends Model{
    protected $table = "Ventas";

    protected $primaryKey = 'id_venta';
    protected $allowedFields = ['id_usuario','id_helado','fecha','cantidad','precio_total'];

}
