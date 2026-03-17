<!DOCTYPE html>
<html lang="es">
<head><title>Detalle de Oferta</title></head>
<body>
    <h1>Detalles de la Oferta</h1>
    
    <a href="{{ route('ofertas.index') }}">Volver al listado</a> |
    <a href="{{ route('ofertas.edit', $oferta->id) }}">Editar esta oferta</a>
    <br><br>
     <!-- botones para regresar a otras rutas -->
    <ul>
        <li><strong>ID:</strong> {{ $oferta->id }}</li>
        <li><strong>Título:</strong> {{ $oferta->titulo }}</li>
        <li><strong>Vigencia:</strong> {{ $oferta->vigencia }}</li>
        <li><strong>Tienda:</strong> {{ $oferta->tienda }}</li>
        <li><strong>Precio Original:</strong> ${{ $oferta->precio_original }}</li>
        <li><strong>Precio con Descuento:</strong> ${{ $oferta->precio_descuento }}</li>
        <li><strong>Fecha de Registro:</strong> {{ $oferta->created_at }}</li>
    </ul>
</body>
</html>