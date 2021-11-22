@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Ingreso de Productos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/ingreso/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre"required>
            </div>
            <div class="form-group">
                <label">Precio</label>
                    <input type="text" name="precio" class="form-control" placeholder="$ precio"required>
            </div>
        
        <div class="form-group row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                 <label">Tipo</label>
                 <select name="tipo_id" class="form-control flex-item" >
                 @foreach($categoria as $item)
                 <option value="{{$item->id}}">{{$item->nombre}}</option>
                 @endforeach
                 </select>
            </div>
             <div class="col-lg-6 col-md-6 col-xs-12">
                <label">Fabricante</label>
                <select name="fabricante_id" class="form-control flex-item">
                @foreach($fabricante as $item)
                 <option value="{{$item->id}}">{{$item->nombre}}</option>
                 @endforeach
                </select>
             </div>
        
        </div>
        
            <div class="form-group">
                <label class="titulo_img">Imagen</label>
                    <input type="file" name="imagen" class="form-control" placeholder="Ingrese la imagen" required>
            </div>          

            

            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Guardar</button>
            </div>
        </form>
    </div>
</div>
<div class=" card card-frm">
    <div class="card-header">
        <h3 class="card-title">DATOS </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Fabricante</th>
                    <th>Imagen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($tiendas as $item)
                <tr>

                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->Categoria}}</td>
                    <td>{{$item->Fabricante}}</td>
                    <td>   <div class="img_dtable"><img src="{{asset('imagenes/imgStore').'/'.$item->imagen}}"
                    class="titulo_img"></div></td>
                    <td>
                        <button class="btn editar" title="Editar" ><a href="{{url('admin/store/edit',$item->id)}}"><i
                                    class="far fa-edit"></i></a></button>
                        <span>
                            <form class="frm" action="{{url('admin/store/eliminar',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn eliminar" title="Eliminar" onclick="return confirm('Quieres eliminar el registro')"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </span>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
