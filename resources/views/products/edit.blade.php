<!DOCTYPE html>
<html lang="en">
<head> 
    <title>crud laravel</title>
</head>

<body>
    <h1>Editar producto</h1>

    <a href="{{route('products.index')}}"> Ver Productos</a>

    @if ($errors->any())
        <div>
            <strong>Opp! hay problemas con los inputs</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT');
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{$product->name}}" required>
        <br>
        <label for="description">Descripcion:</label>
        <textarea type="text" name="description" id="description" required>{{$product->description}} </textarea>
        <br>
        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" step="0.01" value="{{$product->price}}" required>
        <br>
        <button type="submit">Crear Producto</button>
    </form>


</body>
    

</html>
