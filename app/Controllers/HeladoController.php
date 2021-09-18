<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Helado;
class HeladoController extends Controller
{
    public function index()
    {
        $aux= new Helado();
        $datos['helados']=$aux->OrderBy('id','ASC')->findAll();
        $datos['cabecera']= view('template/webAdmin/cabecera');
        $datos['pie']= view('template/webAdmin/piepagina');

        return view('webAdmin/inventario/listar',$datos);
    }
}
