@extends('layouts.panel')
@section('title', 'Producto/Mostrar')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"> Ver producto</i></h3>
                    </div>

                    <div class="col-4 text-right">
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">
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
                                <label for="form-control-label" for="product_code">
                                    <i class="fas fa-book"> Código de producto </i>
                                </label>
                                <p>{{ $products->product_code }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="price">
                                    <i class="fas fa-book-open"> Precio </i>
                                </label>
                                <p>{{ $products->price }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="description">
                                    <i class="fas fa-book-open"> Descripción </i>
                                </label>
                                <p>{{ $products->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="category_id">
                                    <i class="fas fa-building"> Categoría</i>
                                </label>
                                <p>{{ $products->category->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="measureUnit_id">
                                    <i class="fas fa-graduation-cap"> Unidad de medida</i>
                                </label>
                                <p>{{ $products->measureUnit->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="form-control-label" for="supplier_id">
                                    <i class="fas fa-graduation-cap"> Proveedor</i>
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
