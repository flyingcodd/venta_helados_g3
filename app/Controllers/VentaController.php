<?php

namespace App\Controllers;

use App\Models\Helado;
use App\Models\Usuario;
use App\Models\Ventas;
use CodeIgniter\Controller;
class VentaController extends BaseController
{
    public function listar()
    {
        
        $ventas=new Ventas();
        $datos['ventas']=$ventas->OrderBy('id_venta', 'ASC')->findAll();
        $usuarios=new Usuario();
        $datos['usuarios']=$usuarios->OrderBy('id_usuario', 'ASC')->findAll();
        $helados=new Helado();
        $datos['helados']=$helados->OrderBy('id_helado', 'ASC')->findAll();
        
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraAdmin();
        $datos['pie']= $p->pieAdmin();

        return view('webAdmin/venta/listar',$datos);
    }
}
