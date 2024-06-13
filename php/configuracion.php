<?php
    include ("Conexion_bd.php");

    //eliminar alertas no deseadas
    error_reporting(0);

    //validar que el usuario pase por el login
    $user = $_SESSION['User'];
    if (!isset($user)){
        header("location:login.php");
    }

    //consulta de usuarios conectados con el online a 1
    $consulta = "SELECT * FROM prubas WHERE user = '$user'";
    $r = $conexion->query($consulta);
    $extraer = $r->fetch_array();
    if ($extraer > 0) {
        $usuario = $extraer;
        $online = $usuario['id'];
        $on = "UPDATE prubas SET online = '1' WHERE id = '$online'";
        $line = $conexion->query($on);
    }
?>