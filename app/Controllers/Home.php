<?php

namespace App\Controllers;
use App\Models\Helado;
use App\Models\Categoria;
use App\Models\Empresa;

class Home extends BaseController
{
    public function index()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        return view('webCliente/index',$datos);
    }
    public function contacto()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        $empresa=new Empresa();
        $datos['item']= $empresa->OrderBy('id_empresa', 'ASC')->first();
        return view('webCliente/contacto',$datos);
    }
    public function carrito()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        return view('webCliente/carrito',$datos);
    }
    public function perfil()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        return view('webCliente/perfil',$datos);
    }
    public function tienda()
    {
        $helado=new Helado();
        $datos['helados'] = $helado->OrderBy('id_helado', 'ASC')->findAll();
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();

        $categoria=new Categoria();
        $datos['categorias'] = $categoria->OrderBy('id_categoria', 'ASC')->findAll();
        return view('webCliente/shop/tienda',$datos);
    }
    public function producto()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        return view('webCliente/shop/producto',$datos);
    }
    public function nosotros()
    {
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();
        return view('webCliente/nosotros',$datos);
    }
}
