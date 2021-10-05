<?php

namespace App\Controllers;

use App\Models\Carrito;
use App\Models\Empresa;
use App\Models\Usuario;
use App\Models\Helado;

class PlantillaController extends BaseController
{
    public function cabeceraCliente()
    {

        $empresa = new Empresa();
        $BD['empresa'] = $empresa->OrderBy('id_empresa', 'ASC')->first();
        $carrito = new Carrito();
        $BD['carritos'] = $carrito->OrderBy('id_carrito', 'ASC')->findAll();
        $helado = new Helado();
        $BD['helados'] = $helado->OrderBy('id_helado', 'ASC')->findAll();
        $usuario = new Usuario();
        $BD['usuarios'] = $usuario->OrderBy('id_usuario', 'ASC')->findAll();
        $sum = 0;
        $contador=0;
        foreach ($BD['carritos'] as $item) {
            $he = $helado->where('id_helado', $item['id_helado'])->first();
            $sum += $item['cantidad_carrito'] * $he['precio_helado'];
            $contador++;
        }
        $BD['precio_total'] = $sum;
        $BD['contador'] = $contador;
        return view('template/webCliente/cabecera', $BD);
    }
    public function pieCliente()
    {
        $empresa = new Empresa();
        $BD['empresa'] = $empresa->OrderBy('id_empresa', 'ASC')->first();

        return view('template/webCliente/pie', $BD);
    }
    public function cabeceraAdmin()
    {

        $usuario = new Usuario();
        $BD['usuario'] = $usuario->where('estado_usuario', 1)->first();

        return view('template/webAdmin/cabecera', $BD);
    }
    public function pieAdmin()
    {

        return view('template/webAdmin/pie');
    }
}
