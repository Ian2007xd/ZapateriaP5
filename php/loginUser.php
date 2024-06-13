<?php
    include ("Conexion_bd.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST ["user"];
    $password = $_POST ["pass"];
    $password = hash('sha512', $password);
    //$password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
        
    $Vlogin = mysqli_query($conexion, "SELECT * FROM prubas WHERE correo='$correo' and pass='$password'");

    if (mysqli_num_rows($Vlogin) > 0) {
        $user = $_SESSION['User'];
        header ("location:index.php");
    } else {
        echo
        '
        <script>
        alert ("Usuario inexistente o password incorrecta, favor de verificar sus datos");
        window.location = "login.php";
        </script>
        ';
    }
}

        /*$LoginSql = "SELECT * FROM prubas WHERE correo = '$user' and pass = '$pass' and estatus ='1'";
        if ($Rlogin = $conexion->query($LoginSql)) {
            while ($RowLogin = $Rlogin->fetch_array()){
                $CorreoOK = $RowLogin ['correo'];
                $PassOK = $RowLogin ['pass'];
            }
            $Rlogin->close();
        }
        if (isset($user) && isset($pass)){
            if ($user == $CorreoOK && $pass == $PassOK){
                $_SESSION['login'] = TRUE;
                $_SESSION['Usuario'];
                header ("location:AppProgres.php");
            } else {
                $alerta.= "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                    <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                    <use xlink:href='img/Anal.jpeg#x-circle-fill'/>
                    </svg>
                    <strong>
                    Usuario y/o password no valido
                    </strong>
                    Por favor verifica tus credenciales o contacta a soporte tecnico.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lebel='Close'></buttom>
                </div>"
            }
        } else {
            header ("location:index.php");
        }*/
?>