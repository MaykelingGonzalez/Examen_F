@extends('layouts.panel')
@section('title', 'Proveedores')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"><b>Proveedores</b></h3>

                        <div class=" mt-2 mt-md-0" role="group" aria-label="Botones de acción">

                        <a href="{{ route('suppliers.export.excel') }}" class="btn btn-success mr-3 rounded-full">
                            <i class="fas fa-file-excel"></i> Exportar a Excel
                        </a>    

                        <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Proveedor
                        </a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>

                                <th scope="col"><i class="fas fa-barcode"></i><b> Código del proveedor</b></th>
                                <th scope="col"><i class="fas fa-user"></i><b> Tipo de proveedor</b></th>    
                                <th scope="col"><i class="fas fa-building"></i><b> Empresa</b></th>
                                <th scope="col"><i class="fas fa-user"></i><b> Representante</b></th>
                                <th scope="col"><i class="fas fa-phone"></i><b> Número de teléfono</b></th>
                                <th scope="col"><i class="fas fa-envelope"></i><b> Correo electrónico</b></th>
                                <th scope="col"><i class="fas fa-map-pin"></i><b> Dirección</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                            <tr>
                                <td> {{$supplier->supplier_code}}</td>
                                <td> {{$supplier->supplier_type}}</td>
                                <td> {{$supplier->company}}</td>
                                <td> {{$supplier->representative}}</td>
                                <td> {{$supplier->telephone}}</td>
                                <td> {{$supplier->email}}</td>
                                <td> {{$supplier->address}}</td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"></i><b>Mostrar</b>
                                    </a>
                                    
                                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"></i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este proveedor? Esta acción no se puede deshacer.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i><b>Eliminar</b>
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
                        {{ $suppliers->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

