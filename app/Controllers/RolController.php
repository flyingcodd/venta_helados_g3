<?php

namespace App\Controllers;

use App\Models\Rol_Usuario;

class RolController extends BaseController
{
    public function listar()
    {
        
        $rol = new Rol_Usuario();

        $datos['rol'] =$rol->OrderBy('id_rol', 'ASC')->findAll();
        
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraAdmin();
        $datos['pie']= $p->pieAdmin();
        $datos['mensaje'] = session('mensaje');
        return view('webAdmin/rol/listar', $datos);
    }

    public function insertar() //yo
    {
        $rol = new Rol_Usuario();
        $nombre = $this->request->getVar('nombre');
        //$descripcion = $this->request->getVar('descripcion');
        $dato = [
            'nombre_rol' => $nombre
            //'descripcion_categoria' => $descripcion
        ];
        $respuesta = $rol->insert($dato);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/roles')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/admin/roles')->with('mensaje', '0');
        }
    }
    public function borrar($id = null)
    {
        $rol = new Rol_Usuario();
        $rol->where('id_rol', $id)->first();
        $rol->where('id_rol', $id)->delete($id);

        return redirect()->to(base_url() . '/admin/roles')->with('mensaje', 'eliminar');
    }
    public function editar($id = null)
    {
        $rol = new Rol_Usuario();
        $datos['rol'] = $rol->where('id_rol', $id)->first();

        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraAdmin();
        $datos['pie']= $p->pieAdmin();
        return view('webAdmin/rol/editar', $datos);
    }
    public function actualizar()
    {
        $rol = new Rol_Usuario();
        $dato = [
            'nombre_rol' => $this->request->getVar('nombre')
            //'descripcion_categoria' => $this->request->getVar('descripcion')
        ];
        $id = $this->request->getVar('id');


        $respuesta = $rol->update($id, $dato);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/roles')->with('mensaje', 'actualizado');
        } else {
            return redirect()->to(base_url() . '/admin/roles')->with('mensaje', 'noactualizado');
        }
    }
}
