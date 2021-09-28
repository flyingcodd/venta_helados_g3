<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Helado;
class HeladoController extends BaseController
{                        
    public function listar()
    {
        $aux= new Helado();
        $datos['helados']=$aux->OrderBy('id_helado','ASC')->findAll();
        $datos['cabecera']= view('template/webAdmin/cabecera');
        $datos['pie']= view('template/webAdmin/piepagina');

        return view('webAdmin/helado/listar',$datos);
    }

    public function insertar()//yo
    {
        $aux= new Helado();
        $request = \Config\Services::request();
        $data = [
            "nombre_helado" => $request->getPost('nombre_helado'),
            "nombre_helado" => $request->getPost('nombre_helado'),
            "precio_helado" => $request->getPost('precio_helado'),
            "stock_helado" => $request->getPost('stock_helado'),
            "imagen1_helado" => $request->getPost('imagen1_helado'),
            "imagen2_helado" => $request->getPost('imagen2_helado')
        ];
        $aux->insert($data);
        echo json_encode(["mensaje"=>"Se inserto correctamente"]);
    }
}
