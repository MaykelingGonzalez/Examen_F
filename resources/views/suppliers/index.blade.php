@extends('layouts.panel')
@section('title', 'Proveedores')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Proveedores</h3>
                        <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo Proveedor</i>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>

                                <th scope="col"><b class="fas fa-user"> Código del proveedor</b></th>
                                <th scope="col"><b class="fas fa-barcode"> Compañia</b></th>
                                <th scope="col"><b class="fas fa-id-card"> Nombre del representante</b></th>
                                <th scope="col"><b class="fas fa-calendar"> Número de teléfono</b></th>
                                <th scope="col"><b class="fas fa-calendar"></b> Correo electrónico</th>
                                <th scope="col"><b class="fas fa-map"> Dirección</b></th>  
                                <th scope="col"><b class="fas fa-file"> Tipo de proveedor</b></th>                                                           
                                <th scope="col"><b class="fas fa-bars"> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                            <tr>
                                <td> {{$supplier->supplier_code}}</td>
                                <td> {{$supplier->company}}</td>
                                <td> {{$supplier->representative}}</td>
                                <td> {{$supplier->telephone}}</td>
                                <td> {{$supplier->email}}</td>
                                <td> {{$supplier->address}}</td>
                                <td>{{ $supplier->type_supplier->type }}</td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"> Mostrar</i> 
                                    </a>
                                    
                                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"> Editar</i>
                                    </a>

                                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este proveedor? Esta acción no se puede deshacer.');">
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
                        {{ $suppliers->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

