<?php

namespace App\Http\Controllers\adminlte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class indexController extends Controller
{
    public function index(){
        return view('adminlte.welcome');
    }
    public function ingresomenu(){
        $menus=Menu::all();
        
        return view('adminlte.imenu',compact('menus'));
    }

    public function login(){
        return view('adminlte.login');
    }

    public function mostrarformulario($id){
        $menu=Menu::find($id);
return view ('adminlte.editmenu',compact('menu'));

    }
}
