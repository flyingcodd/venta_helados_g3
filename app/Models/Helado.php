<?php
namespace App\Models;

use CodeIgniter\Model;

class Helado extends Model{
    protected $table = "tabla_aux";

    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','imagens'];

}