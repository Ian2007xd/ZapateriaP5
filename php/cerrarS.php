<?php
    session_start();
    include("Conexion_bd.php");
    $user = $_SESSION['User'];
    if (!isset($user)) {
        header("location:../login.php");
    }

    $off = "SELECT * FROM prubas WHERE user='$user'";
    $offl = $Conexion->query($off);
    $offline = $offl->fetch_array();
    if($offline > 0){
        $user = $offline;
        $online = $user['Id'];
        $fuera = "UPDATE prubas SET online= '0' WHERE id='$online'";
        $Efuera = $Conexion->query($fuera);
    }
    session_unset();
    session_destroy();
    header("location:../login.php");
?>