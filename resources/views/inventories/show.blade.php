@extends('layouts.panel')
@section('title', 'Inventarios/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i><b> Ver Inventario</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('inventories.index') }}" class="btn btn-sm btn-primary">
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
                                <label for="form-control-label" for="product_id">
                                    <i class="fas fa-box"></i><b> Nombre del producto</b>
                                </label>
                                <p>{{ $inventories->product->name }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="current_quantity">
                                    <i class="fas fa-arrow-right"></i><b> Cantidad actual</b>
                                </label>
                                <p>{{ $inventories->current_quantity }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="minimum_quantity">
                                    <i class="fas fa-arrow-down"></i><b> Cantidad mínima</b>
                                </label>
                                <p>{{ $inventories->minimum_quantity }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="maximum_quantity">
                                    <i class="fas fa-arrow-up"></i><b> Cantidad máxima</b>
                                </label>
                                <p>{{ $inventories->maximum_quantity }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="description">
                                    <i class="fas fa-pen"></i><b> Descripción</b>
                                </label>
                                <p>{{ $inventories->description }}</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="warehouse_id">
                                    <i class="fas fa-boxes"></i><b> Nombre de la bodega</b>
                                </label>
                                <p>{{ $inventories->warehouse->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

