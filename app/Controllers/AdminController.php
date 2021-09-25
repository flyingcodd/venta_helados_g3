<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Helado;
class AdminController extends Controller
{
    public function index()
    {
        $aux= new Helado();
        $datos['helados']=$aux->OrderBy('id_helado','ASC')->findAll();
        $datos['cabecera']= view('template/webAdmin/cabecera');
        $datos['pie']= view('template/webAdmin/piepagina');

        return view('webAdmin/admin',$datos);
    }
}
