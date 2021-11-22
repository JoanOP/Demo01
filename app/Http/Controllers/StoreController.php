<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Fabricante;
use App\Models\Tienda;

class StoreController extends Controller
{
    public function storepage(){
       
       
      
        $categorias=Categoria::all();
        $fabricantes=Fabricante::all();
        $tiendas=Tienda::all();
        return view('store',compact('categorias','fabricantes','tiendas'));
         
      }
}
