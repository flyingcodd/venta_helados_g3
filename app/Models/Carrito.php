<?php
namespace App\Models;

use CodeIgniter\Model;

class Carrito extends Model{
    protected $table = "Carrito";

    protected $primaryKey = 'id_carrito';
    protected $allowedFields = ['id_helado','id_usuario','estado_carrito','cantidad_carrito'];

}
