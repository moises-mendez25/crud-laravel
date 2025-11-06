@extends('layouts.app')


@section('title', 'Productos')

@section('content')

    @if ($message = Session::get('success'))
       <!-- Success Alert -->
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        
    @endif

    <h1>Productos</h1>

    <!-- Buttons with Label -->
    <a href="{{ route('products.create') }}" type="button" class="btn btn-primary btn-label waves-effect waves-light">
        <i class="ri-user-smile-line label-icon align-middle fs-16 me-2">
        </i> Nuevo Registro
    </a>

    <div class="card">

        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Tabla de productos</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <p class="text-muted">Registro <code>Completo</code> De Todos Los Productos</p>
            <div class="live-preview">
                <div class="table-responsive">
                    <table class="table table-borderless table-nowrap">

                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>



                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-label waves-effect waves-light rounded-pill">
                                       <i class="ri-user-smile-line label-icon align-middle rounded-pill fs-16 me-2"></i> 
                                        Mostrar
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-label waves-effect waves-light rounded-pill">
                                        <i class="ri-check-double-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                                        Editar
                                    </a>
                                </td>
                                <td>

                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach



                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
