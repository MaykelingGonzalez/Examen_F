@extends('layouts.panel')
@section('title', 'Movimiento')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"> Movimientos</h3>
                        <a href="{{ route('movements.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"> Nuevo movimiento</i> 
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><b class="fas fa-book"> Cantidad de movimientos</b></th>
                                <th scope="col"><b class="fas fa-book-open"> Observaciones</b></th>
                                <th scope="col"><b class="fas fa-book-open"> Tipo de movimiento</b></th>
                                <th scope="col"><b class="fas fa-tv"> Producto</b></th>
                                <th scope="col"><b class="fas fa-barcode"> Usuario</b></th>
                                <th scope="col"><b class="fas fa-bars"> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movements as $movement)
                            <tr>                               
                                <td> {{$movement->quantity}}</td>
                                <td> {{$movement->observations}}</td>
                                <td> {{$movement->typeMovement->type_movement}}</td>
                                <td> {{$movement->product->name}}</td>
                                <td> {{$movement->user->name}}</td>


                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('movements.show', $movement->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"> Mostrar</i> 
                                    </a>
                                    
                                    <a href="{{ route('movements.edit', $movement->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"> Editar</i>
                                    </a>

                                    <form action="{{ route('movements.destroy', $movement->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este movimiento? Esta acción no se puede deshacer.');">
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
                        {{ $movements->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


