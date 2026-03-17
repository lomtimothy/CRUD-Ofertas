<!DOCTYPE html>
<html lang="es">
<head><title>Crear Oferta</title></head>
<body>
    <h1>Crear Nueva Oferta</h1>
    
    <a href="{{ route('ofertas.index') }}">Volver al listado</a>
    <br><br>
      <!-- boton para volver al listado -->

    <form action="{{ route('ofertas.store') }}" method="POST">
        <!-- formulario para enviar los datos -->
        @csrf
        <label>Título:</label><br>
        <input type="text" name="titulo" required><br><br>

        <label>Vigencia:</label><br>
        <input type="date" name="vigencia" required><br><br>

        <label>Tienda:</label><br>
        <input type="text" name="tienda" required><br><br>

        <label>Precio Original:</label><br>
        <input type="number" step="0.01" name="precio_original" required><br><br>

        <label>Precio Descuento:</label><br>
        <input type="number" step="0.01" name="precio_descuento" required><br><br>

        <button type="submit">Guardar Oferta</button>
          <!-- boton para guardar la oferta -->
    </form>
</body>
</html>