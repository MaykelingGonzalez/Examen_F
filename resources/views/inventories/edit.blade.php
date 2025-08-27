@extends('layouts.panel')

@section('title', 'Inventarios/Actualizar')

@section('content')

    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-edit"> Editar Inventario</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('inventories.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"> Volver</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body container-fluid">
                <form action="{{ route('inventories.update', $inventories->id) }}" method='POST'>
                    @csrf 
                    @method('PUT')
                    @include('inventories.form')
                </form>
            </div>
        </div>
    </div>
    @endsection


