<!-- Crea un formulario HTML con los siguientes campos:
    - Nombre
    - Apellidos
    - Biografia
    - Email
    - Imagen
    - Contraseña
    - Roles  (Normal, Administrador, ) -->
<?php
require_once 'app/includes/header.php';
?>
<h2>Crear Usuarios</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="biografia">Biografía:</label>
        <textarea id="biografia" name="biografia" rows="4" cols="50"></textarea><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="imagen">Imagen (URL):</label>
        <input type="url" id="imagen" name="imagen"><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <label for="rol">Roles:</label>
        <select id="rol" name="rol">
            <option value="usuario">Usuario</option>
            <option value="admin">Administrador</option>
            <option value="moderador">Moderador</option>
        </select><br><br>

        <button type="submit">Registrar</button>
        <button type="reset">Limpiar</button>
    </form>