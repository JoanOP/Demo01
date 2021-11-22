@extends('templates.principal')
@section('content')

<hr class="offset-lg">
<hr class="offset-lg">
    <div class="container">
      <div class="row">
        <!-- Filter -->
        <div class="col-sm-4 col-md-3">
          <hr class="offset-lg">

          <div class="filter">
            <div class="item">
                <div class="title">
                    <a  data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                    <h1 class="h4">Categorias</h1>
                </div>

                <div class="controls">
                @foreach($categorias as $categoria)
                  <div class="checkbox-group" data-status="active">
                      <!-- <div class="checkbox"><i class="ion-android-done"></i></div> -->
                      <div class="label" data-value="{{$categoria->nombre}}">{{$categoria->nombre}}</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div>
                @endforeach
                 
                </div>
            </div>

            <br>

    

            <div class="item ">
                <div class="title">
                     <a data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i>Open</a>
                    <h1 class="h4">Fabricantes</h1>
                </div>

                <div class="controls">
@foreach($fabricantes as $fabricante)
                  <div class="checkbox-group" data-status="inactive">
                      <!-- <div class="checkbox"><i class="ion-android-done"></i></div> -->
                      <div class="label" data-value="{{$fabricante->nombre}}">{{$fabricante->nombre}}</div>
                      <input type="checkbox" name="checkbox" value="">
                  </div> 
@endforeach
                </div>
            </div>
          </div>
        </div>
        <!-- /// -->

        <!-- Products -->
        <div class="col-sm-8 col-md-9">
          <hr class="offset-lg">

          <div class="products">
            <div class="row">

@foreach($tiendas as $tienda)
              <div class="col-sm-6 col-md-4 product">
                <div class="body">
                  <img src="{{asset('imagenes/imgStore').'/'.$tienda->imagen}}" />

                  <div class="content  align-center">
                    <h1 class="h3">{{$tienda->nombre}}</h1>
                    <p class="price">${{$tienda->precio}}</p>
                    <label>{{$tienda->tipo}}</label>

                   <a href="#"><button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button></a> 
                  </div>
                </div>
              </div>
  @endforeach
            </div>
          </div>

          <!-- <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="disabled"><a href="#">..</a></li>
              <li><a href="#">10</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav> -->
        </div>
        <!-- /// -->
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-sm">
    @endsection