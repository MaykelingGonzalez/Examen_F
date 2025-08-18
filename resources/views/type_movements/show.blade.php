@extends('layouts.panel')
@section('title', 'Tipos de Movimiento/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i><b> Ver Tipo de Movimiento</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('type_movements.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i><b>Volver</b> 
                    </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="supplier_code">
                                    <i class="fas fa-barcode"></i><b> Código del tipo de movimiento</b> 
                                </label>
                                <p>{{ $typeMovements->type_movement_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="supplier_type">
                                    <i class="fas fa-exchange-alt"></i><b> Tipo de movimiento</b> 
                                </label>
                                <p>{{ $typeMovements->type_movement }}</p>
                            </div>
                        </div>
                    </div>
  

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="description">
                                    <i class="fas fa-pen"></i><b> Descripción</b> 
                                </label>
                                <p>{{ $typeMovements->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

