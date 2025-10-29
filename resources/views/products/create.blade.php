<!DOCTYPE html>
<html lang="en">
<head> 
    <title>crud laravel</title>
</head>

<body>
    <h1>Nuevo producto</h1>

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

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="description">Descripcion:</label>
        <textarea type="text" name="description" id="description" required> </textarea>
        <br>
        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" step="0.01" required>
        <br>
        <button type="submit">Crear Producto</button>
    </form>


</body>
    

</html>
