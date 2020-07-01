@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'profile-page sidebar-collapse')


@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/est.jpg')}}'); background-size: cover; background-position: top center;"> 
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title"> Listado de Productos Disponibles</h2>
        <br>
        <a href=" {{url('/admin/products/create')}} " class="btn btn-primary btn-round" >Nuevo producto</a>
        <div class="team">
          <div class="row">
          
    <table class="table">
     <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoría</th>
            <th class="text-right">Precio</th>
            <th class="text-right">Opciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
        <tr>
            <td class="text-center">{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td class="col-sm-4">{{$product->description}}</td>
            <td> {{$product->category ? $product->category->name:'General'}} </td>
            <td class="text-right">&euro;{{$product->price}}</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-info"></i>
                </button>
                <a href="{{url('/admin/products/'.$product->id.'/edit')}}" type="button" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </a>
                <form method="post" action="{{url('/admin/products/'.$product->id)}}">
                {{ csrf_field()}}
                {{method_field('DELETE')}}
                  <button type="submit" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                  </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
    
          </div>
        </div>{{ $products->links() }}
      </div>
      
      @include('includes.footer')
@endsection
