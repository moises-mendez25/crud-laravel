<!DOCTYPE html>
<html lang="en">
<head> 
    <title>crud laravel</title>
</head>

<body>
    <h1>Productos</h1>

    <a href="{{route('products.create')}}">nuevo registro</a>

    <table border="1">

        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>

      

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                </td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">Mostrar</a>
                </td>
                <td>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
       


    </table>

</body>
    

</html>
