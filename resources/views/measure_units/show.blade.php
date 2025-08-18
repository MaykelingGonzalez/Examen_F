@extends('layouts.panel')
@section('title', 'Unidades de medida/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i><b> Ver Unidad de Medida</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('measure_units.index') }}" class="btn btn-sm btn-primary">
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
                                <label for="form-control-label" for="name">
                                    <i class="fas fa-ruler"></i><b> Unidad de medida</b> 
                                </label>
                                <p>{{ $measureUnits->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="symbol">
                                    <i class="fas fa-weight-hanging"></i><b> Símbolo</b> 
                                </label>
                                <p>{{ $measureUnits->symbol }}</p>
                            </div>
                        </div>
                    </div>
  

                
                </div>
            </div>
        </div>
    </div>
@endsection

