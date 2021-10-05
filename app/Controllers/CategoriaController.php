<?php

namespace App\Controllers;

use App\Models\Categoria;

class CategoriaController extends BaseController
{
    public function listar()
    {
        
        $categoria = new Categoria();

        $datos['categoria'] =$categoria->OrderBy('id_categoria', 'ASC')->findAll();
        
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraAdmin();
        $datos['pie']= $p->pieAdmin();
        $datos['mensaje'] = session('mensaje');
        return view('webAdmin/categoria/listar', $datos);
    }

    public function insertar() //yo
    {
        $categoria = new Categoria();
        $nombre = $this->request->getVar('nombre');
        $descripcion = $this->request->getVar('descripcion');
        $dato = [
            'nombre_categoria' => $nombre,
            'descripcion_categoria' => $descripcion
        ];
        $respuesta = $categoria->insert($dato);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/categorias')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/admin/categorias')->with('mensaje', '0');
        }
    }
    public function borrar($id = null)
    {
        $categoria = new Categoria();
        $categoria->where('id_categoria', $id)->first();
        $categoria->where('id_categoria', $id)->delete($id);

        return redirect()->to(base_url() . '/admin/categorias')->with('mensaje', 'eliminar');
    }
    public function editar($id = null)
    {
        $categoria = new Categoria();
        $datos['categoria'] = $categoria->where('id_categoria', $id)->first();

        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraAdmin();
        $datos['pie']= $p->pieAdmin();
        return view('webAdmin/categoria/editar', $datos);
    }
    public function actualizar()
    {
        $categoria = new Categoria();
        $dato = [
            'nombre_categoria' => $this->request->getVar('nombre'),
            'descripcion_categoria' => $this->request->getVar('descripcion')
        ];
        $id = $this->request->getVar('id');


        $respuesta = $categoria->update($id, $dato);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/categorias')->with('mensaje', 'actualizado');
        } else {
            return redirect()->to(base_url() . '/admin/categorias')->with('mensaje', 'noactualizado');
        }
    }
}
