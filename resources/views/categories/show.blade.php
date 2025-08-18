@extends('layouts.panel')
@section('title', 'Categorías/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i><b> Ver Categoría</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary">
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
                                    <i class="fas fa-tags"></i><b> Categoría</b> 
                                </label>
                                <p>{{ $categories->category }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="symbol">
                                    <i class="fas fa-comment"></i><b> Descripción</b> 
                                </label>
                                <p>{{ $categories->description }}</p>
                            </div>
                        </div>
                    </div>
  

                
                </div>
            </div>
        </div>
    </div>
@endsection


