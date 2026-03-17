<!DOCTYPE html>
<html lang="es">
<head><title>Ofertas</title></head>
<body>
    <h1>Listado de Ofertas</h1>
    
    <a href="{{ route('ofertas.create') }}">Crear Nueva Oferta</a>
    <br><br>
{{-- tabla para la informacion --}}
{{-- borde y espacio del texto para la tabla --}}
    <table border="5" cellpadding="10">
{{-- encabezado de la taabla --}}
        <thead>
{{-- crea una fila horizontal con los titulos --}}
            <tr>
{{-- define cada una de las celdas --}}
                <th>ID</th>
                <th>Título</th>
                <th>Tienda</th>
                <th>Vigencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
{{-- incia el cuerpo de la tabla, los datos reales --}}
        <tbody>
            @foreach($ofertas as $oferta)
{{-- recorre todas las ofertas que se envia desde el controlador --}}
                <tr>
                    <td>{{ $oferta->id }}</td>
                    <td>{{ $oferta->titulo }}</td>
                    <td>{{ $oferta->tienda }}</td>
                    <td>{{ $oferta->vigencia }}</td>
                    <td>
                        <a href="{{ route('ofertas.show', $oferta->id) }}">Ver Detalles</a> |
                        <a href="{{ route('ofertas.edit', $oferta->id) }}">Editar</a> |
                        {{-- botones para ir a otras rutas --}}
                        <form action="{{ route('ofertas.destroy', $oferta->id) }}" method="POST" style="display:inline;">
                        {{-- eliminar la oferta --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Eliminar esta oferta?')">Eliminar</button>
                        {{-- confirmar la eliminacion de la oferta --}}
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>