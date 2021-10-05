<?php

namespace App\Controllers;

use App\Models\Categoria;
use CodeIgniter\Controller;
use App\Models\Helado;

class HeladoController extends BaseController
{
    public function listar()
    {
        
        $helado = new Helado();
        $datos['helados'] =$helado->OrderBy('id_helado', 'ASC')->findAll();
        $categorias = new Categoria();
        $datos['categorias'] =$categorias->OrderBy('id_categoria', 'ASC')->findAll();

        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraAdmin();
        $datos['pie']= $p->pieAdmin();
        $datos['mensaje'] = session('mensaje');
        return view('webAdmin/helado/listar', $datos);
    }

    public function insertar() //yo
    {
        $helado = new Helado();
        $nombre = $this->request->getVar('nombre');
        $precio = $this->request->getVar('precio');
        $stock = $this->request->getVar('stock');
        $descripcion = $this->request->getVar('descripcion');
        $categoria = $this->request->getVar('categoria');
        if (($imagen1 = $this->request->getFile('imagen1')) && ($imagen2 = $this->request->getFile('imagen2'))) {
            $nuevoNombre1 = $imagen1->getRandomName();
            $imagen1->move('../public/imagenesHelado/', $nuevoNombre1);

            $nuevoNombre2 = $imagen2->getRandomName();
            $imagen2->move('../public/imagenesHelado/', $nuevoNombre2);

            $dato = [
                'nombre_helado' => $nombre,
                'imagen1_helado' => $nuevoNombre1,
                'imagen2_helado' => $nuevoNombre2,
                'precio_helado' => $precio,
                'stock_helado' => $stock,
                'descripcion' => $descripcion,
                'id_categoria' => $categoria
            ];
            $respuesta = $helado->insert($dato);
        }
        /*
        $request = \Config\Services::request();
        $data = [
            "nombre_helado" => $request->getPost('nombre_helado'),
            "nombre_helado" => $request->getPost('nombre_helado'),
            "precio_helado" => $request->getPost('precio_helado'),
            "stock_helado" => $request->getPost('stock_helado'),
            "imagen1_helado" => $request->getPost('imagen1_helado'),
            "imagen2_helado" => $request->getPost('imagen2_helado')
        ];
        $helado->insert($data);
        echo json_encode(["mensaje"=>"Se inserto correctamente"]);*/
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/helados')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/admin/helados')->with('mensaje', '0');
        }
    }
    public function borrar($id = null)
    {
        $helado = new Helado();
        $datosHelado = $helado->where('id_helado', $id)->first();

        $ruta1 = ('../public/imagenesHelado/' . $datosHelado['imagen1_helado']);
        unlink($ruta1);
        $ruta2 = ('../public/imagenesHelado/' . $datosHelado['imagen2_helado']);
        unlink($ruta2);

        $helado->where('id_helado', $id)->delete($id);

        return redirect()->to(base_url() . '/admin/helados')->with('mensaje', 'eliminar');
    }
    public function editar($id = null)
    {
        $helado = new Helado();
        $datos['helado'] = $helado->where('id_helado', $id)->first();
        $categorias = new Categoria();
        $datos['categorias'] =$categorias->OrderBy('id_categoria', 'ASC')->findAll();
        
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraAdmin();
        $datos['pie']= $p->pieAdmin();
        return view('webAdmin/helado/editar', $datos);
    }
    public function actualizar()
    {
        $helado = new Helado();
        $dato = [
            'nombre_helado' => $this->request->getVar('nombre'),
            'precio_helado' => $this->request->getVar('precio'),
            'stock_helado' => $this->request->getVar('stock'),
            'id_categoria' => $this->request->getVar('categoria'),
            'descripcion' => $this->request->getVar('descripcion')
        ];
        $id = $this->request->getVar('id');
        $helado->update($id, $dato);

        $validacion1 = $this->validate([
            'imagen1' => [
                'uploaded[imagen1]',
                'mime_in[imagen1,image/jpg,image/png,image/jpeg]',
                'max_size[imagen1,1024]',
            ]
        ]);
        $validacion2 = $this->validate([
            'imagen2' => [
                'uploaded[imagen2]',
                'mime_in[imagen2,image/jpg,image/png,image/jpeg]',
                'max_size[imagen2,1024]',
            ]
        ]);
        if ($validacion1 && $validacion2) {
            if (($imagen1 = $this->request->getFile('imagen1'))) {
                $datosHelado = $helado->where('id_helado', $id)->first();

                $ruta1 = ('../public/imagenesHelado/' . $datosHelado['imagen1_helado']);
                unlink($ruta1);


                $nuevoNombre1 = $imagen1->getRandomName();
                $imagen1->move('../public/imagenesHelado/', $nuevoNombre1);

                $dato = [
                    'imagen1_helado' => $nuevoNombre1
                ];
                $helado->update($id, $dato);
            }
            if (($imagen2 = $this->request->getFile('imagen2'))) {
                $datosHelado = $helado->where('id_helado', $id)->first();
                $ruta2 = ('../public/imagenesHelado/' . $datosHelado['imagen2_helado']);
                unlink($ruta2);

                $nuevoNombre2 = $imagen2->getRandomName();
                $imagen2->move('../public/imagenesHelado/', $nuevoNombre2);
                $dato = [
                    'imagen2_helado' => $nuevoNombre2
                ];
                $helado->update($id, $dato);
            }
        }

        $respuesta = $helado->update($id, $dato);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/helados')->with('mensaje', 'actualizado');
        } else {
            return redirect()->to(base_url() . '/admin/helados')->with('mensaje', 'noactualizado');
        }
    }
}
