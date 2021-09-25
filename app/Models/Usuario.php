<?php
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table = "Usuario";

    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre_helado','precio_helado','stock_helado','imagen1_helado','imagen2_helado','descripcion'];

}
