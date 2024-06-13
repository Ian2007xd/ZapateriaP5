<?php
    include ('Conexion_bd.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nom_r"];
    $apellidoP = $_POST["apeP"];
    $apellidom = $_POST["apeM"];
    $user = $_POST["user_r"];
    $correo = $_POST["correo_r"];
    $tel = $_POST["tel_r"];
    $password = $_POST["pass_r"];
    $password = hash('sha512', $password);
    $passwordr = $_POST["rep_pass_r"];
    $dni = uniqid(mt_rand(), false);

    $query = "INSERT INTO prubas (nombre, user, correo, tel, pass, rep_pass, dni)
            VALUES ('$nombre $apellidoP $apellidom', '$user', '$correo', '$tel', '$password', '$password', '$dni')";

    //VERIFICADOR DE CORREO
    $Vcorreo = mysqli_query($conexion, "SELECT * FROM prubas WHERE correo = '$correo'");
    if (mysqli_num_rows($Vcorreo) > 0) {
        echo 
        '
        <script>
        alert ("Este correo ya existe, pruebe con otro");
        window.location = "registro.php";
        </script>
        ';
    }

    $Vsus = mysqli_query($conexion, "SELECT * FROM prubas WHERE user = '$user'");
    if (mysqli_num_rows($Vsus) > 0) {
        echo
        '
        <script>
        alert ("Este usuario ya existe, intente con otro");
        window.location = "registro.php";
        </script>
        ';
    }

    $ejecutar = mysqli_query($conexion, $query);
    }
?>