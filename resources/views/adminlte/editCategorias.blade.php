@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12 card card-frm">
    <!-- general form elements -->
    
        <div class="card-header">
            <h3 class="card-title">Editar Categorias</h3>
        </div>
        <div class="card-body " >
        <form role="form" action="{{url('admin/categorias/update',$categorias->id)}}" method="post">
        @method('put')
        @csrf
          
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{$categorias->nombre}}"required>
                </div>
                
          
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
        <br>
        </div>
    
</div>
@endsection