@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Productos
                
                      <a href="{{ route('products.create') }}" class="pull-right btn btn-sm btn-primary">
                          Crear
                      </a>
                   



                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th> Categoria </th>
                           
                                <th> Codigo</th>
                                <th> Nombre</th>
                                <th> Cantidad</th>
                                <th> Precio </th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->category_id }}</td>
                              
                                <td>{{ $product->code }}       </td>
                                <td>{{ $product->name }}       </td>
                                <td>{{ $product->stock }}     </td>
                                <td>{{ $product->precio }}        </td>
                            
                                  <td width="10px">
                                      <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-default">Ver</a>
                                  </td>
                               
                                <td width="10px">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                                            
                                  <td width="10px">
                                      {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                          <button class="btn btn-sm btn-danger">
                                              Eliminar
                                          </button>
                                      {!! Form::close() !!}
                                  </td>
                               

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
