@extends('layouts.panel')
@section('title', 'Tipos de Proveedores')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Tipos de Proveedores</h3>
                        <a href="{{ route('type_suppliers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo Tipo de Proveedor</i>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><b class="fas fa-graduation-cap"> Tipo de proveedor</b></th>                              
                                <th scope="col"><b class="fas fa-bars"> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($typeSuppliers as $type_supplier)
                            <tr>
                                <td> {{$type_supplier->type}}</td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('type_suppliers.show', $type_supplier->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"> Mostrar</i> 
                                    </a>
                                    
                                    <a href="{{ route('type_suppliers.edit', $type_supplier->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"> Editar</i>
                                    </a>

                                    <form action="{{ route('type_suppliers.destroy', $type_supplier->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este tipo de proveedor? Esta acción no se puede deshacer.');">
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
                        {{ $typeSuppliers->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


