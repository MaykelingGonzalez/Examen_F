@extends('layouts.panel')
@section('title', 'Tipos de Proveedores/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver Tipo de Proveedor</i></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('type_suppliers.index') }}" class="btn btn-sm btn-primary">
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
                                <label for="form-control-label" for="type">
                                    <i class="fas fa-graduation-cap"> Tipo de proveedor</i> 
                                </label>
                                <p>{{ $type_suppliers->type }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
