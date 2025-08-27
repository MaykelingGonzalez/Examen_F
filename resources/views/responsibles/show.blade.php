@extends('layouts.panel')
@section('title', 'Responsables/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i><b> Ver Responsable</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('responsibles.index') }}" class="btn btn-sm btn-primary">
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
                                <label for="form-control-label" for="responsible_code">
                                    <i class="fas fa-barcode"></i><b> Código del responsable</b> 
                                </label>
                                <p>{{ $responsibles->responsible_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="name">
                                    <i class="fas fa-user"></i><b> Responsable</b> 
                                </label>
                                <p>{{ $responsibles->name }}</p>
                            </div>
                        </div>
                    </div>
  

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="identification">
                                    <i class="fas fa-id-card"></i><b> Número de cédula</b> 
                                </label>
                                <p>{{ $responsibles->identification }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="birthdate">
                                    <i class="fas fa-calendar-alt"></i><b> Fecha de nacimiento</b>
                                </label>
                                <p>{{ $responsibles->birthdate }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="birthplace">
                                    <i class="fas fa-home"></i><b> Lugar de nacimiento</b>
                                </label>
                                <p>{{ $responsibles->birthplace }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="age">
                                    <i class="fas fa-calendar-alt"></i><b> Edad</b>
                                </label>
                                <p>{{ $responsibles->age }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="sex">
                                    <i class="fas fa-venus-mars"></i><b> Sexo</b>
                                </label>
                                <p>{{ $responsibles->sex }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="telephone">
                                    <i class="fas fa-phone"></i><b> Teléfono</b>
                                </label>
                                <p>{{ $responsibles->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="email">
                                    <i class="fas fa-envelope"></i><b> Email</b>
                                </label>
                                <p>{{ $responsibles->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="country">
                                    <i class="fas fa-globe"></i><b> País</b>
                                </label>
                                <p>{{ $responsibles->country }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="nationality">
                                    <i class="fas fa-flag"></i><b> Nacionalidad</b>
                                </label>
                                <p>{{ $responsibles->nationality }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="department">
                                    <i class="fas fa-map-marker-alt"></i><b> Departamento</b>
                                </label>
                                <p>{{ $responsibles->department }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="municipality">
                                    <i class="fas fa-map-marker-alt"></i><b> Municipio</b>
                                </label>
                                <p>{{ $responsibles->municipality }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="address">
                                    <i class="fas fa-map-pin"></i><b> Dirección</b>
                                </label>
                                <p>{{ $responsibles->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="marital_status">
                                    <i class="fas fa-heart"></i><b> Estado Civil</b>
                                </label>
                                <p>{{ $responsibles->marital_status }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="academic_level">
                                    <i class="fas fa-user-graduate"></i><b> Nivel Académico</b>
                                </label>
                                <p>{{ $responsibles->academic_level }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

