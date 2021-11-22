@extends('adminlte.principal')
@section('admincontent')
@include('templateadmin.titulo')
<div class="col-md-12  card card-frm">
    <!-- general form elements -->

    <div class="card-header">
        <h3 class="card-title">Editar Fabricantes</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body ">
        <form role="form" action="{{url('admin/fabricantes/update',$fabricante->id)}}" method="post">
            @method('put')
            @csrf
           
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{$fabricante->nombre}}" required>
                </div>

           

            <div class="card-footer">
                <button type="submit" class="btn btn-dark col-12">Editar</button>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection
