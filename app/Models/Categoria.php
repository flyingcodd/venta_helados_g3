<?php
namespace App\Models;

use CodeIgniter\Model;

class Categoria extends Model{
    protected $table = "Categoria";

    protected $primaryKey = 'id_cactegoria';
    protected $allowedFields = ['nombre_categoria','descripcion_categoria'];

}