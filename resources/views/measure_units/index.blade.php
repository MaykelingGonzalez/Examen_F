@extends('layouts.panel')
@section('title', 'Unidad de Medida')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Unidades de Medida</h3>

                        <div class="btn-group mt-2 mt-md-0" role="group" aria-label="Botones de acción">

                        <a href="{{ route('measure_units.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Unidad de Medida
                        </a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><i class="fas fa-ruler"></i><b> Unidad de medida</b></th>    
                                <th scope="col"><i class="fas fa-weight-hanging"></i><b> Símbolo</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($measureUnits as $measureUnit)
                            <tr>
                                <td> {{$measureUnit->measure_unit}}</td>
                                <td> {{$measureUnit->symbol}}</td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('measure_units.show', $measureUnit->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"></i><b>Mostrar</b>
                                    </a>

                                    <a href="{{ route('measure_units.edit', $measureUnit->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"></i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('measure_units.destroy', $measureUnit->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar esta unidad de medida? Esta acción no se puede deshacer.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i><b>Eliminar</b>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $measureUnits->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

