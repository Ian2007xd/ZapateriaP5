<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/NavBar.css">
    <link rel="stylesheet" href="css/servivios.css">
    <title>Document</title>
</head>
<body>
    <!--NAVBAR-->
    <nav class="nav">
        <div class="nav-bar">
        <i class="fa-solid fa-bars slideropen"></i>
            <span class="logo">
                <a href="#">
                    Zapateria CP
                </a>
            </span>
        <div class="menu">
            <div class="logo-toggle">
            <span class="logo navLogo">
                <a href="#">
                    Zapateria CP
                </a>
            </span>
            <i class="fa-solid fa-x sliderclose"></i>
            </div>
            <ul class="nav-links">
                <li><a href="informacion.php">Informacion</a></li>
                <li><a href="index.php">Principal</a></li>
                <li><a href="contactos.php">Contactos</a></li>
                <li><a href="">
                    <i class="fa-solid fa-heart"></i>
                </a></li>
                <li><a href="">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a></li>
            </ul>
            </div>
            <div class="darklight-searchBox">
                <div class="darlight">
                    <i class="fa-solid fa-moon moon"></i>
                    <i class="fa-solid fa-sun sun"></i>
                </div>
                <div class="searchBox">
                    <div class="searchToggle">
                    <i class="fa-solid fa-x cancel"></i>
                    <i class="fa-solid fa-magnifying-glass search"></i>
                    </div>

                    <div class="bar-menu">
                        <input type="text" placeholder="Buscar...">
                        <i class="fa-brands fa-searchengin"></i>
                    </div>
                </div>
            </div>

            <div class="perfil">
                <div class="file" onclick="perfilToggle();">
                    <img src="Img/Anal.jpeg">
                </div>
                <div class="options">
                    <h3>
                        SUS
                        <br>
                        <span>
                            izazagaariel@gmail.com
                        </span>
                    </h3>
                    <ul>
                        <li><i class="fa-solid fa-user"></i><a href="principal.php">MI PERFIL</a></li>
                        <li><i class="fa-solid fa-pen-to-square"></i><a href="#">EDITAR PERFIL</a></li>
                        <li><i class="fa-solid fa-inbox"></i><a href="#">BANDEJA DE ENTREGA</a></li>
                        <li><i class="fa-solid fa-gear"></i><a href="#">AJUSTES</a></li>
                        <li><i class="fa-solid fa-question"></i><a href="#">AYUDA</a></li>
                        <li><i class="fa-solid fa-shuffle"></i></i><a href="#">CAMBIAR CUENTA</a></li>
                        <li><i class="fa-solid fa-circle-xmark"></i><a href="php/cerrarS.php">CERRAR SESION</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--TEXT SERVICIOS-->
    <div class="text-catalogos">
            <p>
                <b>SERVICIOS DISPONIBLES</b>
            </p>
    </div>

    <!--SERVICIOS-->
    <div class="container">

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/folleto.gif" alt="">
                </div>
                <div class="detalle">
                    <h2>
                        CATALOGO EN LINEA
                    </h2>
                    <p>
                        Amplia selección de calzado con descripciones detalladas, fotos de alta calidad y opciones de filtrado por talla, color, estilo, etc.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/guia.gif" alt="">
                </div>
                <div class="detalle">
                    <h2>
                        GUIA DE TALLAS
                    </h2>
                    <p>
                        Información clara sobre cómo medir los pies y seleccionar la talla correcta.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/tutoria.gif">
                </div>
                <div class="detalle">
                    <h2>
                        ASESORAMIENTO VIRTUAL
                    </h2>
                    <p>
                        Chat en vivo o servicio de atención al cliente para ayudar con dudas y asesorar en la elección del calzado adecuado.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/opiniones.gif">
                </div>
                <div class="detalle">
                    <h2>
                       OPINIONES DE CLIENTES
                    </h2>
                    <p>
                        Reseñas y valoraciones de otros compradores para ayudar a tomar decisiones informadas.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/aplicacion-de-pago.gif">
                </div>
                <div class="detalle">
                    <h2>
                        OPCIONES DE PAGO SEGURAS
                    </h2>
                    <p>
                        Múltiples métodos de pago seguros, como tarjetas de crédito, PayPal, transferencias bancarias, etc.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/etta-envios.gif">
                </div>
                <div class="detalle">
                    <h2>
                        ENVIO RAPIDO Y GRATUITO
                    </h2>
                    <p>
                        Opciones de envío rápido y gratuito, así como seguimiento de pedidos.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/etta-reembolso.gif">
                </div>
                <div class="detalle">
                    <h2>
                        POLITICA DE DEVOLUCIONES Y CAMBIOS
                    </h2>
                    <p>
                        Política clara y sencilla para devoluciones y cambios, incluyendo etiquetas de devolución prepagadas.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/venta.gif">
                </div>
                <div class="detalle">
                    <h2>
                        PROMOCIONES Y DESCUENTOS
                    </h2>
                    <p>
                        Ofertas especiales, códigos de descuento y programas de fidelidad para clientes recurrentes.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/noticias.gif">
                </div>
                <div class="detalle">
                    <h2>
                        NOTICIAS Y TENDENCIAS
                    </h2>
                    <p>
                        Blog o sección de noticias con las últimas tendencias de moda en calzado.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/mejor-calidad.gif">
                </div>
                <div class="detalle">
                    <h2>
                        COMPARACION DE PRODUCTOS
                    </h2>
                    <p>
                        Funcionalidad para guardar favoritos y comparar diferentes modelos de calzado.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/nuevo-mensaje.gif">
                </div>
                <div class="detalle">
                    <h2>
                        NOTICIAS POR CORREO ELECTRONICO
                    </h2>
                    <p>
                        Actualizaciones sobre nuevos productos, promociones y el estado de los pedidos.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/ordenador-portatil.gif">
                </div>
                <div class="detalle">
                    <h2>
                       APP MOVIL
                    </h2>
                    <p>
                        Aplicación para facilitar la compra desde dispositivos móviles.
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="servicio" style="--i:0;--clr:#1E68F2;">
                <div class="img">
                    <img src="Img/mas-rico.gif">
                </div>
                <div class="detalle">
                    <h2>
                        Y MUCHO MAS
                    </h2>
                    <p>
                        Muchas mas servicios para ti y para disfrutar
                    </p>
                    <button class="btn">
                        <a href="">
                            Ver mas
                        </a>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!--PIE DE PAGINA-->
    <footer class="pie-pagina">
        <div class="grupo1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="Img/logo-black.jpeg" alt="ZAPATERIA CUATRO PATA">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>
                    SOBRE NOSOTROS:
                </h2>
                <p>
                    En ZapatosPC, ofrecemos calzado de calidad y estilo, con un compromiso inquebrantable con 
                    nuestros clientes.
                </p>
            </div>
            <div class="box">
                <h2>
                    SIGUENOS EN:
                </h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=61557542833391&mibextid=ZbWKwL">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/cuatropataa?igsh=YmFlNmMwajB3Y2lm">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@cuatro_pataa?_t=8lX4PSlV9wT&_r=1">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="https://whatsapp.com/channel/0029VaawN8r4SpkH4akgjG1C">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>Zapateria CP</b> Todos los derechos recervados</small>
        </div>
    </footer>

    <!--ICONOS-->
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

    <!--ACCIONES DE JS-->
    <script src="js/BarMenu.js"></script>
</body>
</html>