<?php

namespace App\Http\Controllers;

use App\Models\Productos;

class ProductosController extends Controller
{
    public function lista(){
        $prod = Productos::all();
        return view('productos', compact('prod'));
    }
}
