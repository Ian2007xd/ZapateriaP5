<?php

function generarToken() {
    return md5(uniqid(mt_rand(), false));
}

function registrarCliente(array $datos, $conexion) {
    $sql = $conexion->prepare ("INSERT INTO usuarios (nombre_lr, usuario_lr, correo_lr, tel, estatus, alta)
            VALUES (?, ?, ?, ?, 1, now())");
            if($sql->execute($datos)) {
                return $conexion->lastInsertId();
            }
            return 0;
}

function registrarUser(array $datos, $conexion) {
    $sql = $conexion->prepare("INSERT INTO usuario (usuario, pass, token, id_cliente)
    VALUES (?, ?, ?, ?)");
    if($sql->execute($datos)) {
        return true;
    }
    return false;
}

?>