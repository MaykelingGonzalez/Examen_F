@extends('layouts.panel')
@section('title', 'Proveedores/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Proveedor</i></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"> Volver</i> 
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
                                    <i class="fas fa-user"> Código del proveedor</i> 
                                </label>
                                <p>{{ $supplier->supplier_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="company">
                                    <i class="fas fa-barcode"> Compañía</i> 
                                </label>
                                <p>{{ $supplier->company }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="representative">
                                    <i class="fas fa-id-card"> Nombre del representante</i>
                                </label>
                                <p>{{ $supplier->representative }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="telephone">
                                    <i class="fas fa-calendar"> Número de teléfono</i> 
                                </label>
                                <p>{{ $supplier->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="email">
                                    <i class="fas fa-calendar"> Correo electrónico</i> 
                                </label>
                                <p>{{ $supplier->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="address">
                                    <i class="fas fa-map"> Dirección</i> 
                                </label>
                                <p>{{ $supplier->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="type_supplier_id">
                                    <i class="fas fa-file"> Tipo de proveedor</i>
                                </label>
                                <p>{{ $supplier->type_supplier->type }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

