<!DOCTYPE html>
<html lang="es">
<head><title>Editar Oferta</title></head>
<body>
    <h1>Editar Oferta</h1>
    
    <a href="{{ route('ofertas.index') }}">Volver al listado</a>
    <br><br>
  <!-- boton para volver al listado -->
    <form action="{{ route('ofertas.update', $oferta->id) }}" method="POST">
        <!-- formulario para actualizar una oferta que ya estaba -->
        <!-- se envia el id de la oferta para saber cual modificar -->
        @csrf
        @method('PUT') <label>Título:</label><br>
        <input type="text" name="titulo" value="{{ $oferta->titulo }}" required><br><br>

        <label>Vigencia:</label><br>
        <input type="date" name="vigencia" value="{{ $oferta->vigencia }}" required><br><br>

        <label>Tienda:</label><br>
        <input type="text" name="tienda" value="{{ $oferta->tienda }}" required><br><br>

        <label>Precio Original:</label><br>
        <input type="number" step="0.01" name="precio_original" value="{{ $oferta->precio_original }}" required><br><br>

        <label>Precio Descuento:</label><br>
        <input type="number" step="0.01" name="precio_descuento" value="{{ $oferta->precio_descuento }}" required><br><br>

        <button type="submit">Actualizar Oferta</button>
    </form>
</body>
</html>