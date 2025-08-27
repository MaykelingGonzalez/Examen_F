@extends('layouts.panel')
@section('title', 'Responsables')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Responsables</h3>

                        <div class="btn-group mt-2 mt-md-0" role="group" aria-label="Botones de acción">  

                        <a href="{{ route('responsibles.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Responsable
                        </a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>

                                <th scope="col"><i class="fas fa-barcode"></i><b> Código del responsable</b></th>
                                <th scope="col"><i class="fas fa-user"></i><b> Responsable</b></th>    
                                <th scope="col"><i class="fas fa-id-card"></i><b> Número de cédula</b></th>
                                <th scope="col"><i class="fas fa-calendar-alt"></i><b> Fecha de nacimiento</b></th>
                                <th scope="col"><i class="fas fa-map-marker-alt"></i><b> Lugar de nacimiento</b></th>
                                <th scope="col"><i class="fas fa-birthday-cake"></i><b> Edad</b></th>
                                <th scope="col"><i class="fas fa-venus-mars"></i><b> Sexo</b></th>
                                <th scope="col"><i class="fas fa-phone"></i><b> Numero de teléfono</b></th>
                                <th scope="col"><i class="fas fa-envelope"></i><b> Correo electrónico</b></th>
                                <th scope="col"><i class="fas fa-globe"></i><b> País</b></th>
                                <th scope="col"><i class="fas fa-flag"></i><b> Nacionalidad</b></th>
                                <th scope="col"><i class="fas fa-map-marker-alt"></i><b> Departamento</b></th>
                                <th scope="col"><i class="fas fa-map-marker-alt"></i><b> Municipio</b></th>
                                <th scope="col"><i class="fas fa-map-pin"></i><b> Dirección</b></th>
                                <th scope="col"><i class="fas fa-heart"></i><b> Estado Civil</b></th>
                                <th scope="col"><i class="fas fa-graduation-cap"></i><b> Nivel académico</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($responsibles as $responsible)
                            <tr>
                                <td> {{$responsible->responsible_code}}</td>
                                <td> {{$responsible->name}}</td>
                                <td> {{$responsible->identification}}</td>
                                <td> {{$responsible->birthdate}}</td>
                                <td> {{$responsible->birthplace}}</td>
                                <td> {{$responsible->age}}</td>
                                <td> {{$responsible->sex}}</td>
                                <td> {{$responsible->telephone}}</td>
                                <td> {{$responsible->email}}</td>
                                <td> {{$responsible->country}}</td>
                                <td> {{$responsible->nationality}}</td>
                                <td> {{$responsible->department}}</td>
                                <td> {{$responsible->municipality}}</td>
                                <td> {{$responsible->address}}</td>
                                <td> {{$responsible->marital_status}}</td>
                                <td> {{$responsible->academic_level}}</td>
                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('responsibles.show', $responsible->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"></i><b>Mostrar</b>
                                    </a>

                                    <a href="{{ route('responsibles.edit', $responsible->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"></i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('responsibles.destroy', $responsible->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar este proveedor? Esta acción no se puede deshacer.');">
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
                        {{ $responsibles->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


