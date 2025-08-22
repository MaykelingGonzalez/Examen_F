@extends('layouts.panel')
@section('title', 'Movimiento/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver movimiento</i></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('movements.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i><b> Volver</b>
                    </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="quantity">
                                    <i class="fas fa-book"></i><b> Cantidad de movimientos</b>
                                </label>
                                <p>{{ $movement->quantity }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="observations">
                                    <i class="fas fa-book-open"></i><b> Observaciones </b>
                                </label>
                                <p>{{ $movement->observations }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="type_movement_id">
                                    <i class="fas fa-building"></i><b> Tipo de movimiento</b>
                                </label>
                                <p>{{ $movement->typeMovement->type_movement }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="product_id">
                                    <i class="fas fa-graduation-cap"></i><b> Nombre del producto</b>
                                </label>
                                <p>{{ $movement->product->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="user_id">
                                    <i class="fas fa-user"></i><b> Nombre del usuario</b>
                                </label>
                                <p>{{ $movement->user->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
