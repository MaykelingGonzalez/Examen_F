@extends('layouts.panel')
@section('title', 'Inventario')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"><b>Inventario</b></h3>

                        <div class="btn-group mt-2 mt-md-0" role="group" aria-label="Botones de acción">

                        <a href="{{ route('inventories.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> <b>Nuevo Inventario</b>
                        </a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><i class="fas fa-arrow-right"></i><b> Cantidad actual</b></th>
                                <th scope="col"><i class="fas fa-arrow-down"></i><b> Cantidad mínima</b></th>    
                                <th scope="col"><i class="fas fa-arrow-up"></i><b> Cantidad máxima</b></th>
                                <th scope="col"><i class="fas fa-comment"></i><b> Descripción</b></th>
                                <th scope="col"><i class="fas fa-box"></i><b> Producto</b></th>
                                <th scope="col"><i class="fas fa-warehouse"></i><b> Bodega</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)
                            <tr>                               
                                    <td>{{ $inventory->current_quantity }}</td>
                                    <td>{{ $inventory->minimum_quantity }}</td>
                                    <td>{{ $inventory->maximum_quantity }}</td>
                                    <td>{{ $inventory->description }}</td>
                                    <td>{{ $inventory->product->category->name }}</td>
                                    <td>{{ $inventory->product->measureUnit->symbol }}</td>
                                    <td>{{ $inventory->product->supplier->company }}</td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('inventories.show', $inventory->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"> </i><b>Mostrar</b>
                                    </a>

                                    <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"> </i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este inventario? Esta acción no se puede deshacer.');">
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
                        {{ $inventories->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

