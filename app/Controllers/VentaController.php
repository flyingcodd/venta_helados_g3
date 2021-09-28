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
        $aux= new Ventas();
        $datos['venta']=$aux->OrderBy('id_venta','ASC')->findAll();
        $aux = new Usuario();
        $datos['usuarios']=$aux->OrderBy('id_usuario','ASC')->findAll();
        $aux = new Helado();
        $datos['helados']=$aux->OrderBy('id_helado','ASC')->findAll();
        $datos['cabecera']= view('template/webAdmin/cabecera');
        $datos['pie']= view('template/webAdmin/piepagina');

        return view('webAdmin/venta/listar',$datos);
    }
}
