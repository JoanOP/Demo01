<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricante;
class FabricanteController extends Controller
{
    public function indexfabricante(){
        $fabricantes=Fabricante::all();
        return view ('adminlte.fabricantes',compact('fabricantes'));
    }
public function ingresofabricantes(Request $request){
    $fabricante=new Fabricante();
    $fabricante->nombre=$request->nombre;
    $fabricante->save();
    return redirect('admin/fabricantes');

}
    public function edit($id){
        $fabricante=Fabricante::find($id);
        return view ('adminlte.editFabricante',compact('fabricante'));
    }
    public function update($id,Request $request){
        $fabricante=Fabricante::find($id);
    $fabricante->nombre=$request->nombre;
    $fabricante->save();
    return redirect('admin/fabricantes');

}
    public function eliminar($id){
        $fabricante=Fabricante::find($id);
    
    $fabricante->delete();
    return redirect('admin/fabricantes');

}
}
