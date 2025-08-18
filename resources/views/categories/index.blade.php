@extends('layouts.panel')
@section('title', 'Categorías')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"><i class="fas fa-tags"></i><b> Categorías</b></h3>

                        <div class="btn-group mt-2 mt-md-0" role="group" aria-label="Botones de acción">

                        <a href="{{ route('categories.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Categoría
                        </a>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-ligth">
                            <tr>
                                <th scope="col"><i class="fas fa-tags"></i><b> Categoría</b></th>    
                                <th scope="col"><i class="fas fa-comment"></i><b> Descripción</b></th>
                                <th scope="col"><i class="fas fa-bars"></i><b> Acciones</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td> {{$category->category}}</td>
                                <td> {{$category->description}}</td>

                                <td style="white-space: nowrap; display: flex; align-items: center;">
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-eye"></i><b>Mostrar</b>
                                    </a>

                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm" style="margin-right: 5px;">
                                        <i class="fas fa-edit"></i><b>Editar</b>
                                    </a>

                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        style="display: inline-block; margin:0; display: flex; align-items: center;"
                                        onsubmit="return confirm('¿Está seguro que desea eliminar esta categoría? Esta acción no se puede deshacer.');">
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
                        {{ $categories->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


