<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Helado;
use App\Models\Carrito;
use App\Models\Usuario;
use App\Models\Ventas;
use CodeIgniter\Commands\Help;

class CajaController extends BaseController
{
    public function index()
    {
        $carrito = new Carrito();
        $datos['carritos'] = $carrito->OrderBy('id_carrito', 'ASC')->findAll();
        $helado = new Helado();
        $datos['helados'] = $helado->OrderBy('id_helado', 'ASC')->findAll();
        $usuario = new Usuario();
        $datos['usuarios'] = $usuario->OrderBy('id_usuario', 'ASC')->findAll();
        $p = new PlantillaController();
        
            //$datos['helado'] = $helado->where('id_helado',)->first();
            $datos['cabecera'] = $p->cabeceraAdmin();
            $datos['pie'] = $p->pieAdmin();
            $datos['mensaje'] = session('mensaje');
            return view('webAdmin/caja/caja', $datos);
        
    }

    public function insertar() //yo
    {
        $carrito = new Carrito();
        $helado = $this->request->getVar('helado');
        $cliente = $this->request->getVar('cliente');
        $cantidad = $this->request->getVar('cantidad');
        $dato = [
            'id_helado' => $helado,
            'id_usuario' => $cliente,
            'cantidad_carrito' => $cantidad,
        ];
        $respuesta = $carrito->insert($dato);

        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/caja')->with('mensaje', 'insertado');
        } else {
            return redirect()->to(base_url() . '/admin/caja')->with('mensaje', 'noinsertado');
        }
    }
    public function borrar($id = null)
    {
        $carrito = new Carrito();
        $carrito->where('id_carrito', $id)->first();

        $carrito->where('id_carrito', $id)->delete($id);

        return redirect()->to(base_url() . '/admin/caja')->with('mensaje', 'eliminado');
    }
    public function editar($id = null)
    {
        $carrito = new Carrito();
        $datos['carrito'] = $carrito->where('id_carrito', $id)->first();
        $helados = new Helado();
        $datos['helados'] = $helados->OrderBy('id_helado', 'ASC')->findAll();
        $usuarios = new Usuario();
        $datos['usuarios'] = $usuarios->OrderBy('id_usuario', 'ASC')->findAll();
        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraAdmin();
        $datos['pie'] = $p->pieAdmin();
        return view('webAdmin/caja/editar', $datos);
    }
    public function actualizar()
    {
        $carrito = new Carrito();
        $helado = $this->request->getVar('helado');
        $cliente = $this->request->getVar('cliente');
        $cantidad = $this->request->getVar('cantidad');
        $dato = [
            'id_helado' => $helado,
            'id_usuario' => $cliente,
            'cantidad_carrito' => $cantidad,
        ];
        $id = $this->request->getVar('id');
        $respuesta = $carrito->update($id, $dato);

        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/caja')->with('mensaje', 'actualizado');
        } else {
            return redirect()->to(base_url() . '/admin/caja')->with('mensaje', 'noactualizado');
        }
    }
    public function vaciar()
    {
        $carrito = new Carrito();
        $id = $carrito->findAll();
        foreach ($id as $item) :
            $carrito->delete($item['id_carrito']);
        endforeach;
        return redirect()->to(base_url() . '/admin/caja')->with('mensaje', 'vaciado');
    }
    public function vender()
    {
        $carrito = new Carrito();
        $id = $carrito->findAll();
        $ventas = new Ventas();
        $helados = new Helado();

        foreach ($id as $item) :
            $helado = $helados->where('id_helado', $item['id_helado'])->first();
            $precioTotal = ($item['cantidad_carrito']) * ($helado['precio_helado']);
            $fecha = date('Y-m-d h:i:s', time());

            $dato = [
                'id_usuario' => $item['id_usuario'],
                'id_helado' => $item['id_helado'],
                'fecha' => $fecha,
                'cantidad' => $item['cantidad_carrito'],
                'precio_total' => $precioTotal
            ];

            $ventas->insert($dato);

        endforeach;

        foreach ($id as $item) :
            $carrito->delete($item['id_carrito']);
        endforeach;

        return redirect()->to(base_url() . '/admin/caja')->with('mensaje', 'vendido');
    }
}
