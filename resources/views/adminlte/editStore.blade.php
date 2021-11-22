@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Editar Productos</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form role="form" action="{{url('admin/store/update',$producto->id)}})}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}" required>
            </div>
            <div class="form-group">
                <label">Precio</label>
                    <input type="text" name="precio" class="form-control" value="{{$producto->precio}}" required>
            </div>

            <div class="form-group row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <label">Tipo</label>
                        <select name="tipo_id" class="form-control flex-item">
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
                <label">Imagen</label>
                    <input type="text" name="imagen" class="form-control" value="{{$producto->imagen}}" required>
            </div>

            <div class="form-group">
                <label class="titulo_img">Imagen</label>
                <div class="img_dtable"><img src="{{asset('imagenes/imgStore').'/'.$producto->imagen}}"
                        class="titulo_img"></div>
                <input type="file" name="imagen" class="form-control" required>
            </div>
            <p>!La imagen se modifica en la BD pero no se esta guardando ni reemplazando en el sistema .............!
            </p>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection
