<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuario;
use App\Models\Rol_Usuario;
class UsuarioController extends BaseController
{
    public function listar()
    {
        $aux= new Usuario();
        $datos['usuarios']=$aux->OrderBy('id_usuario','ASC')->findAll();
        $temp = new Rol_Usuario();
        $datos['roles']=$temp->OrderBy('id_rol','ASC')->findAll();
        $datos['cabecera']= view('template/webAdmin/cabecera');
        $datos['pie']= view('template/webAdmin/piepagina');

        return view('webAdmin/usuario/listar',$datos);
    }
}
