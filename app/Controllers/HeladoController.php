<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Helado;
class HeladoController extends BaseController
{
    public function listar()
    {
        $aux= new Helado();
        $datos['helados']=$aux->OrderBy('id_helado','ASC')->findAll();
        $datos['cabecera']= view('template/webAdmin/cabecera');
        $datos['pie']= view('template/webAdmin/piepagina');

        return view('webAdmin/helado/listar',$datos);
    }
}
