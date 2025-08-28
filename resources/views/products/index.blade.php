@extends('layouts.panel')
@section('title', 'Productos')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h3 class="mb-0"><b>Productos</b></h3>

                    <!-- Botones a la derecha -->
                    <div class="mt-2 mt-md-0 d-flex align-items-center" role="group">
                        <a href="{{ route('products.export.excel') }}" class="btn btn-success mr-3 rounded-full">
                            <i class="fas fa-file-excel"></i> Exportar a Excel
                        </a>

                        <a href="{{ route('products.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> </i> <b>Nuevo producto</b>
                        </a>
                    </div>
                </div>

                <!-- Filtros debajo de los botones -->
                <div class="mt-4 mb-3">
                    <form method="GET" action="{{ route('products.index') }}" class="d-flex flex-wrap align-items-end">

                        <!-- Categoría -->
                        <div class="form-group mr-3 mb-2">
                            <label for="category" class="mb-1">Categoría:</label>
                            <select name="category" id="category" class="form-control form-control-sm">
                                <option value="">Todas las categorías</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Proveedor -->
                        <div class="form-group mr-3 mb-2">
                            <label for="supplier" class="mb-1">Proveedor:</label>
                            <select name="supplier" id="supplier" class="form-control form-control-sm">
                                <option value="">Todos los proveedores</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ request('supplier') == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->company }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Botón Filtrar -->
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-sm btn-primary mt-4">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tabla de productos -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-ligth">
                        <tr>
                            <th scope="col"><i class="fas fa-barcode"></i><b> Código del producto</b></th>
                            <th scope="col"><i class="fas fa-box"></i><b> Producto</b></th>
                            <th scope="col"><i class="fas fa-ruler"></i><b> Unidad de medida</b></th>
                            <th scope="col"><i class="fas fa-money-bill-wave"></i><b> Precio Unitario</b></th>
                            <th scope="col"><i class="fas fa-align-left"></i><b> Descripción</b></th>
                            <th scope="col"><i class="fas fa-tags"></i><b> Categoría</b></th>
                            <th scope="col"><i class="fas fa-truck"></i><b> Proveedor</b></th>
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
                                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('products.edit', $product) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer py-4">
                <nav class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                    {{ $products->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
