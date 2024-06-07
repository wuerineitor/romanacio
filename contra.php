<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registro</title>
</head>
<body>
    <form action="php/registro_usuario_be.php" method="POST">
    <section class="form-registro">
    <h4>FORMULARIO REGISTRO</h4>
        <input class="controls" type="text" name="nombres" placeholder="ingresa nombres">
        <input class="controls"type="text" name="apellido" placeholder="ingresa apellidos">
        <input class="controls"type="email" name="correo"  placeholder="ingresa correo">
        <input class="controls"type="text" name="contrasena"  placeholder="ingresa contraseña">
        <p>estoy de acuerdo con <a href="#">terminos y condiciones</a></p>
        <input class="boton" type="submit" value="registrar">
        <p><a target="" href="inicio.html"> ya tengo cuenta</p></a>
</section>
    </form>
    
</body>
</html>
