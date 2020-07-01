@extends('layouts.app')

@section('title', 'Bienvenido a ProTienda')

@section('body-class', 'profil-page sidebar-collapse')


@section('content')
<div class="page-header header-filter"  style="background-image: url('{{asset('img/est.jpg')}}'); background-size: cover; background-position: top center;">

  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Registrar nuevo produto</h2>
        <div class="section text-left">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
               @endforeach
            </ul>
         </div>
        @endif</div>
            <form method="post" action="{{url('/admin/products')}}">
              {{csrf_field()}}
              <div class="row">
                <div class="col-sm-6">
                	<div class="form-group label-floating">
		                <label class="control-label">Nombre del producto</label>
		                <input type="text" class="form-control" name="name" value="{{ old('name')}}">
	                </div>
                </div>

                <div class="col-sm-6">
                	<div class="form-group label-floating">
		                <label class="control-label">Precio del producto</label>
		                <input type="number" class="form-control" name="price" value="{{ old('price')}}">
	                </div>
                </div>
               </div> 
                	<div class="form-group label-floating">
		                <label class="control-label">Descripcion corta</label>
		                <input type="text" class="form-control" name="description" value="{{ old('description')}}">
	                </div>
                



                <textarea class="form-control" placeholder="Descripción larga" rows="5" name="long_description">{{ old('long_description')}}</textarea>
                  <br>
                <button class="btn btn-primary">Registrar Producto</button>
                <a href=" {{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>
              <!--$table->string('name');
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->float('price');              !-->




            </form>
         
        
      </div>
    </div>
  </div>
  @include('includes.footer')
@endsection
