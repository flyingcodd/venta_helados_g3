<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
use App\Models\Rol_Usuario;

class UsuarioController extends BaseController
{
    public function listar()
    {
        $usuarios = new Usuario();
        $datos['usuarios'] = $usuarios->OrderBy('id_usuario', 'ASC')->findAll();

        $roles = new Rol_Usuario();
        $datos['roles'] = $roles->OrderBy('id_rol', 'ASC')->findAll();

        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraAdmin();
        $datos['pie'] = $p->pieAdmin();
        $datos['mensaje'] = session('mensaje');
        return view('webAdmin/usuario/listar', $datos);
    }
    public function insertar() //yo
    {
        $password1 = $this->request->getVar('password1');
        $password2 = $this->request->getVar('password2');
        if ($password1 == $password2) {
            $usuario = new Usuario();
            $nombre = $this->request->getVar('nombre');
            $email = $this->request->getVar('email');
            $apellido = $this->request->getVar('apellido');
            $direccion = $this->request->getVar('direccion');
            $rol = $this->request->getVar('rol');
            
            $dato = [
                'id_rol' => $rol,
                'estado_usuario' => 0,
                'correo_usuario' => $email,
                'password_usuario' => $password1,
                'nombre_usuario' => $nombre,
                'apellido_usuario' => $apellido,
                'direccion_usuario' => $direccion
            ];
            $usuario->insert($dato);
            return redirect()->to(base_url() . '/admin/usuarios')->with('mensaje', 'insertado');
        } else {
            return redirect()->to(base_url() . '/admin/usuarios')->with('mensaje', 'noinsertado');
        }
    }
    public function borrar($id = null)
    {
        $usuario = new Usuario();
        $usuario->where('id_usuario', $id)->first();

        $usuario->where('id_usuario', $id)->delete($id);

        return redirect()->to(base_url() . '/admin/usuarios')->with('mensaje', 'eliminado');
    }
    public function editar($id = null)
    {
        $usuario = new Usuario();
        $datos['usuario'] = $usuario->where('id_usuario', $id)->first();
        $roles = new Rol_Usuario();
        $datos['roles'] = $roles->OrderBy('id_rol', 'ASC')->findAll();

        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraAdmin();
        $datos['pie'] = $p->pieAdmin();
        return view('webAdmin/usuario/editar', $datos);
    }
    public function actualizar()
    {
        $usuario = new Usuario();
        $password = $this->request->getVar('password');
        $nombre = $this->request->getVar('nombre');
        $email = $this->request->getVar('email');
        $apellido = $this->request->getVar('apellido');
        $direccion = $this->request->getVar('direccion');
        $rol = $this->request->getVar('rol');
        $dato = [
            'id_rol' => $rol,
            'correo_usuario' => $email,
            'password_usuario' => $password,
            'nombre_usuario' => $nombre,
            'apellido_usuario' => $apellido,
            'direccion_usuario' => $direccion
        ];
        $id = $this->request->getVar('id');
        $respuesta = $usuario->update($id, $dato);

        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/usuarios')->with('mensaje', 'actualizado');
        } else {
            return redirect()->to(base_url() . '/admin/usuarios')->with('mensaje', 'noactualizado');
        }
    }
}
