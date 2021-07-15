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
