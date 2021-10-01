<?php

namespace App\Controllers;

use App\Models\Categoria;
use CodeIgniter\Controller;
use App\Models\Helado;
use DB;
use App\Quotation;

class TiendaController extends BaseController
{
    public function listar()
    {
    }


    public function editar($id = null)
    {
        //$helados = new Helado();
        //$datos['helado'] = $helados->where('id_helado', $id)->first();

        $db = \Config\Database::connect();
        $query   = $db->query('select * from helado inner join categoria where helado.id_categoria=categoria.id_categoria && id_helado='.$id);
        $datos['inner'] = $query->getResultArray();
        

        /*$categoria = new Categoria();
        $datos['categoria'] = $categoria->where('id_categoria',$helado['id_categoria'])->first();
        */
        $p=new PlantillaController();
        $datos['cabecera']= $p->cabeceraCliente();
        $datos['pie']= $p->pieCliente();

        return view('webCliente/shop/producto', $datos);
    }
}
