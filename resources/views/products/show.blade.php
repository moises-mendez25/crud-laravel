@extends('layouts.app')


@section('title', 'Productos')

@section('content')

    <div class="card">

        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Producto Detalle</h4>

        </div>
        <div class="card-body">
            <div class="live-preview">
                <div class="row gy-4">
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id" id="id" value="{{ $product->id }}" readonly>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Precio</label>
                                <input type="number" class="form-control" name="price" id="price" step="0.01" value="{{ $product->price }}" readonly>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="description" id="description" readonly> {{ $product->description }} </textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="basiInput" class="form-label">&#160;</label>
                                <a href="{{ route('products.index') }}" type="button"
                                    class="btn btn-primary btn-label waves-effect waves-light rounded-pill">
                                    <i class="ri-user-smile-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                                    Ver Productos
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>


    </div>

@endsection
