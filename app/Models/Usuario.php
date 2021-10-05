<?php
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table = "Usuario";

    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['id_rol','estado_usuario','correo_usuario','password_usuario','nombre_usuario','apellido_usuario','direccion_usuario'];

}
