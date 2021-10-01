<?php

namespace App\Controllers;
use App\Models\Helado;
use App\Models\Categoria;
use App\Models\Empresa;

class PlantillaController extends BaseController
{
    public function cabeceraCliente()
    {
        
        $empresa = new Empresa();

        $BD['empresa'] =$empresa->OrderBy('id_empresa', 'ASC')->first();
        return view('template/webCliente/cabecera',$BD);
    }
    public function pieCliente()
    {
        $empresa = new Empresa();
        $BD['empresa'] =$empresa->OrderBy('id_empresa', 'ASC')->first();
        
        return view('template/webCliente/pie',$BD);
    }
}
