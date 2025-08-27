<!DOCTYPE html>
<html>
<head>
    <title>Crear Aula</title>
</head>
<body style="background-color: pink; font-family: Arial; text-align:center;">
    <h1>➕ Crear Aula</h1>

    <form action="{{ route('aulas.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Capacidad:</label>
        <input type="number" name="capacidad" required><br><br>

        <button type="submit">💾 Guardar</button>
    </form>

    <a href="{{ route('aulas.index') }}">⬅️ Volver</a>
</body>
</html>