<?php

namespace App\Controllers;

use App\Models\Usuario;

class LoginController extends BaseController
{
    public function login()
    {
        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraCliente();
        $datos['pie'] = $p->pieCliente();
        $datos['mensaje'] = session('mensaje');
        return view('webAdmin/auth/login', $datos);
    }
    public function registro()
    {
        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraCliente();
        $datos['pie'] = $p->pieCliente();
        $datos['mensaje'] = session('mensaje');
        return view('webAdmin/auth/registrar', $datos);
    }
    public function validar()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $usuarios = new Usuario();
        $item = $usuarios->where('correo_usuario', $email)->first();


        if (($item['correo_usuario'] == $email) && ($item['password_usuario'] == $password)) {
            
            $data = [
                'id_usuario'=>$item['id_usuario'],
                'nombre_usuario' => $item['nombre_usuario'],
                'id_rol' => $item['id_rol'],
            ];

            $session= session();
            $session->set($data);

            if ($item['id_rol'] == 1) {
                return redirect()->to(base_url() . '/admin');
            } elseif ($item['id_rol'] == 2) {
                return redirect()->to(base_url() . '/admin');
            } elseif ($item['id_rol'] == 3) {
                return redirect()->to(base_url() . '/');
            }
        } else {

            return redirect()->to(base_url() . '/login')->with('mensaje','nologin');
        }
    }
    public function salir()
    {
        $session=session();
        $session->destroy();

        
        return redirect()->to(base_url() . '/');
    }
    public function nuevo()
    {
        $password1 = $this->request->getVar('password1');
        $password2 = $this->request->getVar('password2');
        if ($password1 == $password2) {
            $usuario = new Usuario();
            $nombre = $this->request->getVar('nombre');
            $email = $this->request->getVar('email');
            $apellido = $this->request->getVar('apellido');
            $direccion = $this->request->getVar('direccion');
            $dato = [
                'id_rol' => 3,
                'estado_usuario' => 0,
                'correo_usuario' => $email,
                'password_usuario' => $password1,
                'nombre_usuario' => $nombre,
                'apellido_usuario' => $apellido,
                'direccion_usuario' => $direccion
            ];
            $usuario->insert($dato);
            return redirect()->to(base_url() . '/login')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/registrar')->with('mensaje', '0');
        }
    }
}
