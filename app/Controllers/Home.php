<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webCliente/index',$datos);
    }
    public function contacto()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webCliente/contacto',$datos);
    }
    public function carrito()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webCliente/carrito',$datos);
    }
    public function perfil()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webCliente/perfil',$datos);
    }
    public function tienda()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webCliente/shop/tienda',$datos);
    }
    public function producto()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webCliente/shop/producto',$datos);
    }
    public function nosotros()
    {
        $datos['cabecera']= view('template/webCliente/cabecera');
        $datos['pie']= view('template/webCliente/pie');
        return view('webCliente/nosotros',$datos);
    }
}
