<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Tienda;
use App\Models\Categoria;
use App\Models\Fabricante;


class tiendaController extends Controller
{
    public function tienda(){
        $tiendas=DB::table('fabricantes')
        ->join('tiendas','fabricantes.id','=','tiendas.fabricante_id')
        ->join('categorias','tiendas.tipo_id','=','categorias.id')
       ->select('tiendas.id','tiendas.nombre','tiendas.precio','tiendas.precio','tiendas.imagen','categorias.nombre as Categoria','fabricantes.nombre as Fabricante')
       ->get();
        $categoria=Categoria::all();
        $fabricante=Fabricante::all();
        return view ('adminlte.tienda',compact('tiendas','categoria','fabricante'));
    }

public function ingresotienda(Request $request){
    $producto=new Tienda();
    $file=$request->file('imagen');
    $img=time()."-".$file->getClientOriginalName();
    $producto->nombre=$request->nombre;
    $producto->precio=$request->precio;
    $producto->tipo_id=$request->tipo_id;
    $producto->fabricante_id=$request->fabricante_id;
    $producto->imagen=$img;
    $producto->save();
    Storage::disk('imagenStore')->put($img,\File::get($file));
    return redirect('admin/store');

}
    public function edit($id){
        $producto=Tienda::find($id);
        $categoria=Categoria::all();
        $fabricante=Fabricante::all();
        return view ('adminlte.editStore',compact('producto','categoria','fabricante'));
    }

    public function update($id,Request $request){
    $producto=Tienda::find($id);
    $producto->nombre=$request->nombre;
    $producto->precio=$request->precio;
    $producto->tipo_id=$request->tipo_id;
    $producto->fabricante_id=$request->fabricante_id;
    $producto->imagen=$request->imagen;
    if ($request->hasFile('imagen')){
        $archivoFoto=$request->file('imagen');
        $nombreFoto=time().$archivoFoto->getClientOriginalName();
        $archivoFoto->move(public_path().'/imagenes/imgStore', $nombreFoto);

// esta es la línea que faltaba. Llamo a la foto del modelo y le asigno la foto recogida por el formulario de actualizar.
    $producto->imagen=$nombreFoto;

      }

    $producto->save();

    return redirect('admin/store');

}





    public function eliminar($id){
    $producto=Tienda::find($id);
    $producto->delete();
    return redirect('admin/store');

}


}
