<?php
namespace App\Models;

use CodeIgniter\Model;

class Empresa extends Model{
    protected $table = "Empresa";

    protected $primaryKey = 'id_empresa';
    protected $allowedFields = ['nombre_empresa','slogan_empresa','telefono1_empresa','telefono2_empresa','email1_empresa','email2_empresa','icono_empresa','logo_empresa','ubicacion_empresa','mapa_empresa'];

}