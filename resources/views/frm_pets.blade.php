<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Mascota</title>
</head>
<body>

<h1>Formulario de Registro de Mascotas</h1>

<form action="{{ route('pet.store') }}" method="POST">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad"><br><br>

    <label>Especie:</label><br>
    <input type="text" name="especie"><br><br>

    <label>Raza:</label><br>
    <input type="text" name="raza"><br><br>

    <label>Tamaño:</label><br>
    <input type="text" name="tamano"><br><br>

    <label>Sexo:</label><br>
    <select name="sexo">
        <option value="Macho">Macho</option>
        <option value="Hembra">Hembra</option>
    </select><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea><br><br>

    <button type="submit">Registrar Mascota</button>
</form>

</body>
</html>
