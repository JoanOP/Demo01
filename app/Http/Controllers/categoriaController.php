<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class categoriaController extends Controller
{
   public function indexcategoria(){
    $categorias=Categoria::all();
       return view('adminlte.Categorias',compact('categorias'));
   }

   public function ingresocategoria(Request $request){
    $categoria=new Categoria();
    $categoria->nombre=$request->nombre;
    $categoria->save();
    return redirect('admin/categorias');

}
public function edit($id){
    $categorias=Categoria::find($id);
    return view('adminlte.editCategorias',compact('categorias'));
}

public function update($id,Request $request){
    $categorias=Categoria::find($id);
    $categorias->nombre=$request->nombre;
    $categorias->save();
    return redirect('admin/categorias');

}
public function eliminar($id){
    $categorias=Categoria::find($id);
    
    $categorias->delete();
    return redirect('admin/categorias');

}
}
