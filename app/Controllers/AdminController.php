<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;
use App\Models\Helado;
use App\Models\Empresa;

class AdminController extends BaseController
{
    public function index()
    {
        $aux = new Helado();
        $datos['helados'] = $aux->OrderBy('id_helado', 'ASC')->findAll();

        $db = \Config\Database::connect();
        $query   = $db->query('select sum(precio_total) from ventas');
        $datos['dash'] = $query->getResultArray();
        $datos['cabecera'] = view('template/webAdmin/cabecera');
        $datos['pie'] = view('template/webAdmin/piepagina');

        return view('webAdmin/admin', $datos);
    }
    public function configuraciones()
    {
        $empresa = new Empresa();
        $datos['empresa'] = $empresa->OrderBy('id_empresa', 'ASC')->first();
        $datos['cabecera'] = view('template/webAdmin/cabecera');
        $datos['pie'] = view('template/webAdmin/piepagina');

        $datos['mensaje'] = session('mensaje');
        return view('webAdmin/configuraciones/general', $datos);
    }
    
    public function actualizar()
    {
        $empresa = new Empresa();

        $id = $this->request->getVar('id');
        $dato = [
            'nombre_empresa' => $this->request->getVar('nombre'),
            'slogan_empresa' => $this->request->getVar('slogan'),
            'telefono1_empresa' => $this->request->getVar('telefono1'),
            'telefono2_empresa' => $this->request->getVar('telefono2'),
            'email1_empresa' => $this->request->getVar('email1'),
            'email2_empresa' => $this->request->getVar('email2'),
            'ubicacion_empresa' => $this->request->getVar('ubicacion'),
            'mapa_empresa' => $this->request->getVar('mapa')
        ];
        
        $respuesta = $empresa->update($id, $dato);
        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/configuraciones')->with('mensaje', 'actualizado');
        } else {
            return redirect()->to(base_url() . '/admin/configuraciones')->with('mensaje', 'noactualizado');
        }
    }

}
