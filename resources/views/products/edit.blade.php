@extends('layouts.app')


@section('title', 'Productos')

@section('content')
    <h1>Editar producto</h1>

    @if ($errors->any())
       <!-- Danger Alert -->
        <div class="alert alert-danger alert-dismissible alert-additional fade show" role="alert">
            <div class="alert-body">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <i class="ri-error-warning-line fs-16 align-middle"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="alert-heading">Opp!</h5>
                        <p class="mb-0">Hay problemas con los inputs </p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                </div>
            </div>
            <div class="alert-content">
                <p class="mb-0">Por favor verifique los campos .</p>
            </div>
        </div>
    @endif
    <div class="card">

        <div class="card-header align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>
    
        </div>
           <div class="card-body">
                <div class="live-preview">
                    <div class="row gy-4">
                        <form action="{{route('products.update', $product->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="basiInput" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" required >
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6">
                                <div>
                                    <label for="basiInput" class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="price" id="price" step="0.01" value="{{$product->price}}" required>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="basiInput" class="form-label">Descripcion</label>
                                    <textarea class="form-control" name="description" id="description" required>{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <label for="basiInput" class="form-label">&#160;</label>
                                    <button type="submint" class="btn btn-success btn-label waves-effect waves-light rounded-pill">
                                        <i class="ri-check-double-line label-icon align-middle rounded-pill fs-16 me-2"></i> 
                                        Actualizar
                                    </button>
                                 
                                    <a href="{{ route('products.index') }}" type="button" class="btn btn-primary btn-label waves-effect waves-light rounded-pill">
                                        <i class="ri-user-smile-line label-icon align-middle rounded-pill fs-16 me-2"></i> 
                                        Ver Productos
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    </div>
  
@endsection
