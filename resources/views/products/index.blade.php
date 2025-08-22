@extends('layouts.panel')
@section('title', 'Producto')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Productos</h3>

                        <div class="btn-group mt-2 mt-md-0" role="group" aria-label="Botones de acción">

                        <a href="{{ route('products.export.excel') }}" class="btn btn-success">
                            <i class="fas fa-file-excel"></i> Exportar a Excel
                        </a>   
                        
                        <a href="{{ route('products.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo producto</i> 
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><b class="fas fa-file"> Código de producto</b></th>
                                <th scope="col"><b class="fas fa-file"> Nombre de producto</b></th>
                                <th scope="col"><b class="fas fa-file"> Precio</b></th>
                                <th scope="col"><b class="fas fa-file"> Descripción</b></th>
                                <th scope="col"><b class="fas fa-user"> Categoría</b></th>
                                <th scope="col"><b class="fas fa-book"> Unidad de medida</b></th>
                                <th scope="col"><b class="fas fa-book"> Proveedor</b></th>
                                <th scope="col"><b class="fas fa-bars"> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>                               
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->measureUnit->symbol }}</td>
                                    <td>{{ $product->supplier->company }}</td>
                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"> Mostrar</i> 
                                    </a>

                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"> Editar</i>
                                    </a>

                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este producto? Esta acción no se puede deshacer.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"> Eliminar</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $products->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

