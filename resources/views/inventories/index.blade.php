@extends('layouts.panel')
@section('title', 'Inventario')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h3 class="mb-0"><b>Inventario</b></h3>

                    <!-- Botones a la derecha -->
                    <div class="mt-2 mt-md-0 d-flex align-items-center" role="group">
                        <a href="{{ route('inventories.export.excel') }}" class="btn btn-success mr-3 rounded-full">
                            <i class="fas fa-file-excel"></i> Exportar a Excel
                        </a>

                        <a href="{{ route('inventories.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> <b>Nuevo Inventario</b>
                        </a>
                    </div>
                </div>

                <!-- Filtros debajo de los botones -->
                <div class="mt-4 mb-3">
                    <form method="GET" action="{{ route('inventories.index') }}" class="d-flex flex-wrap align-items-end">

                        <!-- Producto -->
                        <div class="form-group mr-3 mb-2">
                            <label for="product" class="mb-1">Producto:</label>
                            <select name="product" id="product" class="form-control form-control-sm">
                                <option value="">Todos los productos</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" {{ request('product') == $product->id ? 'selected' : '' }}>
                                        {{ $product->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bodega -->
                        <div class="form-group mr-3 mb-2">
                            <label for="warehouse" class="mb-1">Bodega:</label>
                            <select name="warehouse" id="warehouse" class="form-control form-control-sm">
                                <option value="">Todas las bodegas</option>
                                @foreach($warehouses as $warehouse)
                                    <option value="{{ $warehouse->id }}" {{ request('warehouse') == $warehouse->id ? 'selected' : '' }}>
                                        {{ $warehouse->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Fecha de creación -->
                        <div class="form-group mr-3 mb-2">
                            <label for="created_month" class="mb-1">Mes y año de creación:</label>
                            <input type="month" name="created_month" id="created_month" class="form-control form-control-sm" 
                                   value="{{ request('created_month') }}">
                        </div>

                        <!-- Fecha de actualización -->
                        <div class="form-group mr-3 mb-2">
                            <label for="updated_month" class="mb-1">Mes y año de actualización:</label>
                            <input type="month" name="updated_month" id="updated_month" class="form-control form-control-sm" 
                                   value="{{ request('updated_month') }}">
                        </div>

                        <!-- Botón Filtrar -->
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-sm btn-primary mt-4">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tabla de inventario -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad actual</th>
                            <th>Cantidad mínima</th>
                            <th>Cantidad máxima</th>
                            <th>Descripción</th>
                            <th>Bodega</th>
                            <th>Fecha de creación</th>
                            <th>Última actualización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventories as $inventory)
                        <tr>
                            <td>{{ $inventory->product->name }}</td>
                            <td>{{ $inventory->current_quantity }}</td>
                            <td>{{ $inventory->minimum_quantity }}</td>
                            <td>{{ $inventory->maximum_quantity }}</td>
                            <td>{{ $inventory->description }}</td>
                            <td>{{ $inventory->warehouse->name }}</td>
                            <td>{{ $inventory->created_at->timezone('America/Managua')->format('d/m/Y H:i') }}</td>
                            <td>{{ $inventory->updated_at->timezone('America/Managua')->format('d/m/Y H:i') }}</td>
                            <td class="d-flex">
                                <a href="{{ route('inventories.show', $inventory->id) }}" class="btn btn-primary btn-sm mr-1">Mostrar</a>
                                <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-info btn-sm mr-1">Editar</a>
                                <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST"
                                      onsubmit="return confirm('¿Está seguro que desea eliminar este inventario?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer py-4">
                <nav class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                    {{ $inventories->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
