@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Producto
                 
                      <a href="{{ route('products.index') }}" class="pull-right btn btn-sm btn-primary">
                          Inicio
                      </a>
               
                </div>

                <div class="panel-body">
                  <p><strong>Categoria</strong> {{ $category_id->category }}</p>             
                    <p><strong>Codigo</strong> {{ $product->code }}</p>
                    <p><strong>Nombre</strong> {{ $product->name }}</p>
                    <p><strong>Cantidad</strong> {{ $product->stock }}</p>
                    <p><strong>Impuesto</strong> {{ $product->precio }}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
