@extends('layouts.panel')

@section('title', 'Movimientos/Crear')

@section('content')

    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-plus-circle"> Registrar movimiento</i></h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('movements.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"> Volver</i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body container-fluid">
                <form action="{{ route('movements.store') }}" method="POST">
                    @csrf
                    @include('movements.form')
                </form>
            </div>
        </div>
    </div>
@endsection


