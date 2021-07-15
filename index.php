<?php
$servidor="127.0.0.1";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

$enlace= mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    echo"Error en la conexion con el servidor";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form method="POST" class="form-register">
        <h2 class="form__titulo">Crear una cuenta</h2>
        <div class="contenedor-inputs">
            <input type="text" name="nombre" placeholder="Nombre" class="input--48" required>
            <input type="text" name="apellidos" placeholder="Apellidos" class="input--48"required>
            <input type="email" name="correo" placeholder="Correo" class="input--100" required>
            <input type="text" name="usuario" placeholder="Usuario" class="input--48" required>
            <input type="password" name="clave" placeholder="Contraseña" class="input--48" required>
            <input type="text" name="telefono" placeholder="Telefono" class="input--100" required>
            <input type="submit" value="Registrar" class="btn--enviar" name="registrarse">
            <p class="form__link">¿Ya tienes una cuenta? <a href="#">Ingresa aqui</a></p>
        </div>
    </form>
</body>
</html>
<?php
if (isset($_POST["registrarse"])) {
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $correo=$_POST["correo"];
    $usuario=$_POST["usuario"];
    $contraseña=$_POST["clave"];
    $telefono=$_POST["telefono"];
    $Id=rand(1,99);

    $insertarDatos="INSERT INTO datos VALUES('$nombre', 
                                                                            '$apellidos', 
                                                                            '$correo', 
                                                                            '$usuario', 
                                                                            '$contraseña', 
                                                                            '$telefono', 
                                                                            '$Id')";

    $ejecutarInsertar=mysqli_query($enlace, $insertarDatos);

    if (!$ejecutarInsertar) {
        echo"Error en la linea de sql";
    }
}
?>
