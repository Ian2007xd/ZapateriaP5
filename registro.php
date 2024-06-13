<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registro.css">
    <title>REGISTRO</title>
</head>
<body>
    <script src="https://kit.fontawesome.com/81581fb069.js"
    crossorigin="anonymous"></script>

    <div class="fondo">
        <div class="burbujas">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:14;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:16;"></span>
            <span style="--i:12;"></span>
            <span style="--i:11;"></span>
            <span style="--i:19;"></span>
            <span style="--i:26;"></span>
            <span style="--i:22;"></span>
            <span style="--i:29;"></span>
            <span style="--i:11;"></span>
            <span style="--i:16;"></span>
            <span style="--i:11;"></span>
        </div>
    </div>

    <?php
    include ("php/registro_user.php");
    ?>
    <div class="login">
        <form action="" method="post" class="form-registro">
            <h1>REGISTRO</h1>
            <div class="nombreC">
            <div class="input-box">
                <input name="nom_r" type="text" id="nom_r" placeholder="Nombre..." required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input name="apeP" type="text" id="apeP" placeholder="Apellido paterno..." required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input name="apeM" type="text" id="apM" placeholder="Apellido materno..." required>
                <i class="fa-solid fa-user"></i>
            </div>
            </div>
            <div class="datos">
            <div class="input-box">
                <input name="user_r" type="text" id="user_r" placeholder="Usuario..." required>
                <i class="fa-solid fa-user-secret"></i>
            </div>
            <div class="input-box">
                <input name="correo_r" type="email" id="correo_r" placeholder="Correo..." required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input name="tel_r" type="tel" id="tel_r" placeholder="Telefono..." required>
                <i class="fa-solid fa-phone"></i>
            </div>
        </div>
        <div class="passwords">
            <div class="input-box">
                <input name="pass_r" type="password" id="pass_r" placeholder="Contraseña..." required>
                <i class="fa-solid fa-eye-slash"></i>
            </div>
            <div class="input-box">
                <input name="rep_pass_r" type="password" id="rep_pass_r" placeholder="Repetir contraseña..." required>
                <i class="fa-solid fa-eye-slash"></i>
            </div>
        </div>
            <div class="contra">
                <label>
                    <input type="checkbox" onclick="Verpass(this);">Ver contraseña
                </label>
                <a href="#">¿Olvidaste la contraseña?</a>
            </div>
            <button type="submit" class="btn-login">
                Registrarse
            </button>
            <div class="registro">
                <p>¿Ya tienes cuenta? 
                    <a href="login.php">Iniciar sesion</a> 
                </p>
            </div>
        </form>
    </div>

    <script>
    function Verpass (ck) {
        if (ck.checked) {
            $('#pass_r').attr("type", "text");
            $('#rep_pass_r').attr("type", "text");
        } else {
            $('#pass_r').attr("type", "password");
            $('#rep_pass_r').attr("type", "password");
        }
    }
    </script>
</body>
</html>