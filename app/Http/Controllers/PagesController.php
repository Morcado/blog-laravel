<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function index() {
        return view('pages/index');
    }

    public function about() {
        return view('pages/about');
    }
    // Recibir parametro de modo tradicional directamente del controlador en la url
    public function services() {
        $id = request('id');
        $costo = request('costo');
        $datas = ['Web designo', 'programacion', 'CEO', 'Mercado'];
        // $params = Array(
        //     'id' => $id,
        //     'costo' => $costo
        // );
        // return 'Service con id = ' . $id . ' costo =' . $costo;
        // Recibir parametros de la pagina, y mandarlos a la vista
        return view('pages/services', [
            'idVista' => $id,
            'costoVista' => $costo,
            'services' => $datas
        ]);
    }
}
