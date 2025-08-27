<!DOCTYPE html>
<html>
<head>
    <title>Editar Aula</title>
</head>
<body style="background-color: pink; font-family: Arial; text-align:center;">
    <h1>✏️ Editar Aula</h1>

    <form action="{{ route('aulas.update', $aula->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $aula->nombre }}" required><br><br>

        <label>Capacidad:</label>
        <input type="number" name="capacidad" value="{{ $aula->capacidad }}" required><br><br>

        <button type="submit">✅ Actualizar</button>
    </form>

    <a href="{{ route('aulas.index') }}">⬅️ Volver</a>
</body>
</html>