<?php

namespace App\Controllers;
use App\Models\Helado;
class LoginController extends BaseController
{
    public function login()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        return view('webAdmin/auth/login',$datos);
    }
    public function registro()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        return view('webAdmin/auth/registrar',$datos);
    }
}