<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;
use App\Models\Helado;
use App\Models\Empresa;
use App\Models\Ventas;

class AdminController extends BaseController
{
    public function index()
    {
        $aux = new Helado();
        $datos['helados'] = $aux->OrderBy('id_helado', 'ASC')->findAll();

        $db = \Config\Database::connect();
        $query   = $db->query('
        select nombre_helado,imagen1_helado,sum(precio_total) from ventas inner join helado where ventas.id_helado=helado.id_helado group by ventas.id_helado order by precio_total desc');
        $datos['dash'] = $query->getResultArray();

        $ventas = new Ventas();
        $datos['ventas']=$ventas->orderBy('id_venta','asc')->findAll();
        $sum = 0;$nro_ventas=0;
        foreach ($datos['ventas'] as $item) {
            $sum += $item['precio_total'];
           $nro_ventas++;
        }$cont=0;
        foreach ($datos['helados'] as $item) {
            $cont ++;
        }
        $datos['nro_ventas'] = $nro_ventas;
        $datos['precio_total'] = $sum;
        $datos['cantidad_helados'] = $cont;

        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraAdmin();
        $datos['pie'] = $p->pieAdmin();

        return view('webAdmin/admin', $datos);
    }
    public function configuraciones()
    {
        $empresa = new Empresa();
        $datos['empresa'] = $empresa->OrderBy('id_empresa', 'ASC')->first();
        $p = new PlantillaController();
        $datos['cabecera'] = $p->cabeceraAdmin();
        $datos['pie'] = $p->pieAdmin();

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
        $validacion = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/png,image/jpeg]',
                'max_size[imagen,1024]',
            ]
        ]);
        if (($imagen = $this->request->getFile('imagen'))) {

            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/images/', $nuevoNombre);

            $dato = [
                'logo_empresa' => $nuevoNombre
            ];
            $empresa->update($id, $dato);
        }

        if ($respuesta > 0) {
            return redirect()->to(base_url() . '/admin/configuraciones')->with('mensaje', 'actualizado');
        } else {
            return redirect()->to(base_url() . '/admin/configuraciones')->with('mensaje', 'noactualizado');
        }
    }
}
