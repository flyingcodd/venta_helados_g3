<?php

namespace App\Controllers;
use App\Models\Helado;
class LoginController extends BaseController
{
    public function login()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webAdmin/auth/login',$datos);
    }
    public function registro()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webAdmin/auth/registrar',$datos);
    }
}