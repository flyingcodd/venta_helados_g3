<?php

namespace App\Controllers;

use App\Models\Categoria;
use CodeIgniter\Controller;
use App\Models\Helado;
use App\Models\Carrito;
use App\Models\Usuario;
use App\Models\Ventas;
use App\Quotation;

class TiendaController extends BaseController
{
    public function listar()
    {
    }

    public function editar($id = null)
    {
        $helados = new Helado();
        $categorias = new Categoria();
        //$datos['helado'] = $helados->where('id_helado', $id)->first();

        $datos['helado'] = $helados->find($id);
        $datos['categoria'] = $categorias->where('id_categoria', $datos['helado']['id_categoria'])->first();

        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraCliente();
        $datos['pie'] = $p->pieCliente();

        return view('webCliente/shop/producto', $datos);
    }
    public function carrito()
    {
        $carrito = new Carrito();
        $datos['carritos'] = $carrito->OrderBy('id_carrito', 'ASC')->findAll();
        $helado = new Helado();
        $datos['helados'] = $helado->OrderBy('id_helado', 'ASC')->findAll();
        $usuario = new Usuario();
        $datos['usuarios'] = $usuario->OrderBy('id_usuario', 'ASC')->findAll();
        $p = new PlantillaController();

        $sum = 0;
        foreach ($datos['carritos'] as $item) {
            $he = $helado->where('id_helado', $item['id_helado'])->first();
            $sum += $item['cantidad_carrito'] * $he['precio_helado'];
        }
        $datos['precio_total'] = $sum;
        $datos['cabecera'] = $p->cabeceraCliente();
        $datos['pie'] = $p->pieCliente();
        $datos['mensaje'] = session('mensaje');
        return view('webCliente/carrito', $datos);
    }
    public function borrar($id = null)
    {
        $carrito = new Carrito();
        $carrito->where('id_carrito', $id)->first();

        $carrito->where('id_carrito', $id)->delete($id);

        return redirect()->to(base_url() . '/carrito')->with('mensaje', 'eliminado');
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
            return redirect()->to(base_url() . '/tienda')->with('mensaje', 'insertado');
        } else {
            return redirect()->to(base_url() . '/tienda')->with('mensaje', 'noinsertado');
        }
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
                'id_usuario' => session('id_usuario'),
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

        return redirect()->to(base_url() . '/carrito')->with('mensaje', 'vendido');
    }
}
