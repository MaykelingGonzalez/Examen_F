@extends('layouts.panel')
@section('title', 'Tipos de movimiento')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"><b>Tipos de Movimiento</b></h3>

                        <div class="btn-group mt-2 mt-md-0" role="group" aria-label="Botones de acción">

                        <a href="{{ route('type_movements.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Tipo de Movimiento
                        </a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>

                                <th scope="col"><i class="fas fa-barcode"></i><b> Código</b></th>
                                <th scope="col"><i class="fas fa-exchange-alt"></i><b> Tipo de movimiento</b></th>    
                                <th scope="col"><i class="fas fa-pen"></i><b> Descripción</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($typeMovements as $typeMovement)
                            <tr>
                                <td> {{$typeMovement->type_movement_code}}</td>
                                <td> {{$typeMovement->type_movement}}</td>
                                <td> {{$typeMovement->description}}</td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('type_movements.show', $typeMovement->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"></i><b>Mostrar</b>
                                    </a>

                                    <a href="{{ route('type_movements.edit', $typeMovement->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"></i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('type_movements.destroy', $typeMovement->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este tipo de movimiento? Esta acción no se puede deshacer.');">
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
                        {{ $typeMovements->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

