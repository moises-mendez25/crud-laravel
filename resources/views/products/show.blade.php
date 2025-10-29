<!DOCTYPE html>
<html lang="en">
<head> 
    <title>crud laravel</title>
</head>

<body>
    <h1>Mostrar producto</h1>

    <a href="{{route('products.index')}}"> Ver Productos</a>
    <p><strong>Id: </strong> {{ $product->id }}</p>
    <p><strong>Nombre:</strong> {{ $product->name }}</p>
    <p><strong>Descripcion:</strong> {{ $product->description }}</p>    
    <p><strong>Precio:</strong> {{ $product->price }}</p>


</body>
    

</html>
