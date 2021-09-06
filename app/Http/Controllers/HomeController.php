<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nombre = 'pepito';

        $objeto1 = [
            'nombre' => 'jony',
            'apellido' => 'aguiar'
        ];

        $objeto2 = [
            'nombre' => 'Maxi',
            'apellido' => 'Miranda'
        ];

        $arreglo = ['objeto1' => $objeto1, 'objeto2' => $objeto2];

        $arreglo = json_encode($arreglo);

        return view('home',['arreglo'=>$arreglo]);
    }
}
