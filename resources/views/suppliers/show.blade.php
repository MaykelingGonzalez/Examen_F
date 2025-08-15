@extends('layouts.panel')
@section('title', 'Proveedores/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i><b> Ver Proveedor</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-sm btn-primary">
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
                                    <i class="fas fa-barcode"></i><b> Código del proveedor</b> 
                                </label>
                                <p>{{ $suppliers->supplier_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="supplier_type">
                                    <i class="fas fa-user"></i><b> Tipo de proveedor</b> 
                                </label>
                                <p>{{ $suppliers->supplier_type }}</p>
                            </div>
                        </div>
                    </div>
  

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="company">
                                    <i class="fas fa-building"></i><b> Empresa</b> 
                                </label>
                                <p>{{ $suppliers->company }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="representative">
                                    <i class="fas fa-user"></i><b> Nombre del representante</b>
                                </label>
                                <p>{{ $suppliers->representative }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="telephone">
                                    <i class="fas fa-phone"></i><b> Número de teléfono</b>
                                </label>
                                <p>{{ $suppliers->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="email">
                                    <i class="fas fa-envelope"></i><b> Correo electrónico</b>
                                </label>
                                <p>{{ $suppliers->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="address">
                                    <i class="fas fa-map-pin"></i><b> Dirección</b>
                                </label>
                                <p>{{ $suppliers->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

