@extends('layouts.panel')
@section('title', 'Producto')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"><b> Productos</b></h3>

                        <div class=" mt-2 mt-md-0" role="group" aria-label="Botones de acción">

                        <a href="{{ route('products.export.excel') }}" class="btn btn-success mr-3 rounded-full">
                            <i class="fas fa-file-excel"></i> Exportar a Excel
                        </a> 
                        
                        <a href="{{ route('products.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> <b>Nuevo producto</b>
                        </a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><i class="fas fa-barcode"></i><b> Código del producto</b></th>
                                <th scope="col"><i class="fas fa-box"></i><b> Producto</b></th>  
                                <th scope="col"><i class="fas fa-ruler"></i><b> Unidad de medida</b></th>  
                                <th scope="col"><i class="fas fa-money-bill"></i><b> Precio Unitario</b></th>
                                <th scope="col"><i class="fas fa-pen"></i><b> Descripción</b></th>
                                <th scope="col"><i class="fas fa-tags"></i><b> Categoría</b></th>
                                
                                <th scope="col"><i class="fas fa-boxes"></i><b> Proveedor</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>                               
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->measureUnit->symbol }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->supplier->company }}</td>
                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"> </i><b>Mostrar</b>
                                    </a>

                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"> </i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este producto? Esta acción no se puede deshacer.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"> </i><b>Eliminar</b>
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

