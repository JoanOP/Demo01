<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Producto;

class productosController extends Controller
{
    public function ingresoproduct(){
        $productos=Producto::all();
        return view('adminlte.Homeproductos',compact('productos'));
    }
    public function ingresoproductHome(Request $request){
        $productos=new Producto();
        $file=$request->file('imagen');
        $img=time()."-".$file->getClientOriginalName();
        $productos->nombre=$request->nombre;
        $productos->precio=$request->precio;
        $productos->imagen=$img;
        $productos->save();
        Storage::disk('imagenHome')->put($img,\File::get($file));
       
 
  return redirect('admin/Homeproducto');
    }
    
    public function formularioedit($id){
        $productos=Producto::find($id);
        return view ('adminlte.editHomeproductos',compact('productos'));
    }
    public function update($id, Request $request){
        $productos=Producto::find($id);    
        $productos->nombre=$request->nombre;
        $productos->precio=$request->precio;
        $productos->imagen=$request->imagen;
        $productos->save();
        return redirect('admin/Homeproducto');
    }
    public function eliminar($id){
        $productos=Producto::find($id);    
        $productos->delete();
        return redirect('admin/Homeproducto');
    }
}
