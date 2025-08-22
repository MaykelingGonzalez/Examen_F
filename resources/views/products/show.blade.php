@extends('layouts.panel')
@section('title', 'Productos/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i><b> Ver Producto</b></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-arrow-left"></i><b> Volver</b>
                    </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="product_code">
                                    <i class="fas fa-file"></i><b> Código de producto</b>
                                </label>
                                <p>{{ $products->product_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="name">
                                    <i class="fas fa-file"></i><b> Producto</b>
                                </label>
                                <p>{{ $products->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="price">
                                    <i class="fas fa-file"></i><b> Precio</b>
                                </label>
                                <p>{{ $products->price }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="description">
                                    <i class="fas fa-file"></i><b> Descripción</b>
                                </label>
                                <p>{{ $products->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="category_id">
                                    <i class="fas fa-user"></i><b> Nombre de la categoría</b>
                                </label>
                                <p>{{ $products->category->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="measureUnit_id">
                                    <i class="fas fa-book"></i><b> Nombre de la unidad de medida</b>
                                </label>
                                <p>{{ $products->measureUnit->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="supplier_id">
                                    <i class="fas fa-user"></i><b> Nombre del proveedor</b>
                                </label>
                                <p>{{ $products->supplier->company }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

