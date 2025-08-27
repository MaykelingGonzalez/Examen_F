@extends('layouts.panel')
@section('title', 'Bodegas/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i><b> Ver Bodega</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('warehouses.index') }}" class="btn btn-sm btn-primary">
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
                                <label for="form-control-label" for="warehouse_code">
                                    <i class="fas fa-barcode"></i><b> Código de bodega</b>
                                </label>
                                <p>{{ $warehouses->warehouse_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="name">
                                    <i class="fas fa-warehouse"></i><b> Nombre de la bodega</b>
                                </label>
                                <p>{{ $warehouses->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="location">
                                    <i class="fas fa-map-pin"></i><b> Ubicación</b>
                                </label>
                                <p>{{ $warehouses->location }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="responsible_id">
                                    <i class="fas fa-user"></i><b> Nombre del responsable</b>
                                </label>
                                <p>{{ $warehouses->responsible->name }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


