<?php
namespace App\Models;

use CodeIgniter\Model;

class Rol_Usuario extends Model{
    protected $table = "Rol_Usuario";

    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['nombre_rol'];

}
