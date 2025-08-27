@extends('layouts.panel')
@section('title', 'Bodega')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Bodegas</h3>

                        <div class="btn-group mt-2 mt-md-0" role="group" aria-label="Botones de acción">
 

                        <a href="{{ route('warehouses.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> <b>Nueva bodega</b>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><i class="fas fa-barcode"></i><b> Código de bodega</b></th>
                                <th scope="col"><i class="fas fa-warehouse"></i><b> Bodega</b></th>    
                                <th scope="col"><i class="fas fa-map-pin"></i><b> Ubicación</b></th>
                                <th scope="col"><i class="fas fa-user"></i><b> Responsable</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($warehouses as $warehouse)
                            <tr>                               
                                    <td>{{ $warehouse->warehouse_code }}</td>
                                    <td>{{ $warehouse->name }}</td>
                                    <td>{{ $warehouse->location }}</td>
                                    <td>{{ $warehouse->responsible->name }}</td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('warehouses.show', $warehouse->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"> </i><b>Mostrar</b>
                                    </a>

                                    <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"> </i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('warehouses.destroy', $warehouse->id) }}" method="POST"
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
                        {{ $warehouses->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


