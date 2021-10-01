<?php
namespace App\Models;

use CodeIgniter\Model;

class Helado extends Model{
    protected $table = "Helado";

    protected $primaryKey = 'id_helado';
    protected $allowedFields = ['nombre_helado','precio_helado','stock_helado','imagen1_helado','imagen2_helado','descripcion','id_categoria'];

}