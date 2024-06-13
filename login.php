<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>LOGIN</title>
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
        include ("php/loginUser.php");
    ?>
    <div class="login">
        <form action="" method="post" class="form-login">
            <h1>LOGIN</h1>
            <div class="input-box">
                <input type="email" name="user" placeholder="Correo..." required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="pass" id="pass" placeholder="Password..." required>
                <i class="fa-solid fa-eye-slash"></i>
            </div>
            <div class="contra">
                <label>
                    <input type="checkbox" onclick="Verpass(this);">Ver contraseña
                </label>
                <a href="#">¿Olvidaste la contraseña?</a>
            </div>
            <button type="submit" class="btn-login">
                Iniciar sesion
            </button>
            <div class="registro">
                <p>¿No tienes cuenta? 
                    <a href="registro.php">Registrar</a> 
                </p>
            </div>
        </form>
    </div>
    <script>
    function Verpass (ck) {
        if (ck.checked) {
            $('#pass').attr("type", "text");
        } else {
            $('#pass').attr("type", "password");
        }
    }
    </script>
</body>
</html>