<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Ventas;
use App\Models\Usuario;
use App\Models\Helado;
class VentaController extends BaseController
{
    public function listar()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT id_venta,nombre_usuario,nombre_helado,fecha,cantidad,precio_total FROM ventas inner join usuario inner join helado
        where ventas.id_usuario=usuario.id_usuario & ventas.id_helado=helado.id_helado;');
        $datos['inner'] = $query->getResultArray();
        
        
        $datos['cabecera']= view('template/webAdmin/cabecera');
        $datos['pie']= view('template/webAdmin/piepagina');

        return view('webAdmin/venta/listar',$datos);
    }
}
