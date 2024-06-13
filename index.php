<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAPATERIA CP</title>
    <link rel="stylesheet" href="css/Principal.css">
    <link rel="stylesheet" href="css/NavBar.css">
</head>
<body>
    <!--MENU-->
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
                <li><a href="servicios.php">Servicios</a></li>
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


    <!--SLIDER-->
    <div class="carrucel">
        <div class="list">
            <div class="item">
                <img src="Img/NIKE PURPPLE.webp" alt="">
                <div class="contect">
                    <div class="autor">NIKE</div>
                    <div class="tittle">TENIS</div>
                    <div class="topic" style="--i:0;--clr:#8A2BE2;">RTFKT x Nike Dunk Genesis Forging</div>
                    <div class="descric">"The RTFKT x Nike Dunk Genesis "Void" will be released on June 
                        13, 2024 for a retail price of 222€ / 180£ / 222$ at Nike and selected retailers 
                        like Solebox, BSTN, END and more. The style code of this sneaker release is 
                        HM4465-001 and is dressed in the color Black/Wild Berry."</div>
                    <div class="btns-carrucel">
                        <button>VER MAS</button>
                        <button>COMPRAR AHORA</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Img/jordan 1 mid.jpg" alt="">
                <div class="contect">
                    <div class="autor">JORDAN</div>
                    <div class="tittle">TENIS</div>
                    <div class="topic" style="--i:0;--clr:#e7ed07;">JORDAN 1 MID AMARILLOS</div>
                    <div class="descric">"Los Jordan 1 Mid Black Amarillo Orange presentan un upper de nobuk y cuero negro, naranja y amarillo, con la base de nobuk. A partir de ahí, los detalles blancos de Nike "Swoosh" y "Jumpman" y "Air Jordan" completan el diseño."</div>
                    <div class="btns">
                        <div class="btns-carrucel">
                            <button>VER MAS</button>
                            <button>COMPRAR AHORA</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="Img/nike m.jpg" alt="">
                <div class="contect">
                    <div class="autor">JORDAN</div>
                    <div class="tittle">Air Jordan 1</div>
                    <div class="topic" style="--i:0;--clr:#fc49ab;">TENIS</div>
                    <div class="descric">"Este par, uno de los lanzamientos originales más queridos de los archivos, cuenta con una parte superior de piel con los característicos Nike Air en la lengüeta, el inconfundible logotipo Wings en el cuello y una suela Air, un diseño Retro también creado con un acabado de charol"</div>
                        <div class="btns-carrucel">
                            <button>VER MAS</button>
                            <button>COMPRAR AHORA</button>
                        </div>
                </div>
            </div>
            <div class="item">
                <img src="Img/legend 9 academy.webp" alt="">
                <div class="contect">
                    <div class="autor">NIKE</div>
                    <div class="tittle">Lgend 9 Academy</div>
                    <div class="topic" style="--i:0;--clr:#ff7300;">TENIS</div>
                    <div class="descric">"Los Tenis de Fútbol Nike Tiempo Legend 9 Academy TF son para todos los jugadores sin importar su estilo de juego o posición; este par es muy ligero y su capellada cuenta con partes en relieve en toda la zona de impacto para disparos precisos. Sus tacos TF son ideales para partidos en canchas de césped artificial."</div>
                        <div class="btns-carrucel">
                            <button>VER MAS</button>
                            <button>COMPRAR AHORA</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="miniaturas">
            <div class="item">
                <img src="Img/jordan 1 mid.jpg" alt="">
                <div class="contect">
                    <div class="tittle">JORDAN 1 MID AMARILLOS</div>
                    <div class="des">Info...</div>
                </div>
            </div>
            <div class="item">
                <img src="Img/nike m.jpg" alt="">
                <div class="contect">
                    <div class="tittle">Air Jordan 1</div>
                    <div class="des">Info...</div>
                </div>
            </div>
            <div class="item">
                <img src="Img/legend 9 academy.webp" alt="">
                <div class="contect">
                    <div class="tittle">Legend 9 Academy</div>
                    <div class="des">Info...</div>
                </div>
            </div>
            <div class="item">
                <img src="Img/NIKE PURPPLE.webp" alt="">
                <div class="contect">
                    <div class="tittle">RTFKT x Nike Dunk Genesis Forging</div>
                    <div class="des">Info...</div>
                </div>
            </div>
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <div class="time"></div>
    </div>

    <!--CATALOGOS-->
    <div class="text-catalogos">
            <p>
                <b>CATALOGOS</b>
            </p>
    <div class="catalogos">
        <div class="secciones">
            <img src="Img/Dama.jpg" alt="">
            <div class="categorias">
                <h1><a href="#">DAMA</a></h1>
            </div>
        </div>
        <div class="secciones">
            <img src="Img/Niños.jpg" alt="">
            <div class="categorias">
                <h1><a href="#">NIÑOS</a></h1>
            </div>
        </div>
        <div class="secciones">
            <img src="Img/caballero.jpeg" alt="">
            <div class="categorias">
                <h1><a href="#">CABALLERO</a></h1>
            </div>
        </div>
        <div class="secciones">
            <div class="slider-s">
                <ul>
                    <li>
                        <img src="Img/Dama.jpg" alt="">
                    </li>
                    <li>
                        <img src="Img/Niños.jpg" alt="">
                    </li>
                    <li>
                        <img src="Img/caballero.jpeg" alt="">
                    </li>
                </ul>
            <div class="categorias">
                <h1 class=><a href="#">OFERTAS FOGOSAS</a></h1>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class="productos">
        <p class="text-productos">
            <b>🔥<img src="Img/Anal.jpeg" width="32" height="32"> OFERTAS FOGOSAMENTE HIBRIDAS <img src="Img/Anal.jpeg" width="32" height="32">🔥</b>
        </p>
    <div class="product-destacados">
        <div class="product-card">
            <div class="product-img">
                <img src="Img/dc_court_graffik.png" alt="DC COURT GRAFFIK">
                <span class="descuento">-15%</span>
                <div class="btn-group">
                    <span>
                        <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-heart-circle-plus"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-share"></i>
                    </span>
                </div>
            </div>
            <div class="product-star">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>
                    DC COURT GRAFFIK
                </h3>
                <spam class="car-agregar">
                    <i class="fa-solid fa-cart-plus"></i>
                </spam>
                <p class="precio">
                    $1,643.00
                    <span>
                        $1,933.00
                    </span>
                </p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img">
                <img src="Img/yezzy-Photoroom.png-Photoroom.png" alt="DC COURT GRAFFIK">
                <span class="descuento">-50%</span>
                <div class="btn-group">
                    <span>
                        <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-heart-circle-plus"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-share"></i>
                    </span>
                </div>
            </div>
            <div class="product-star">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>
                    DC COURT GRAFFIK
                </h3>
                <spam class="car-agregar">
                    <i class="fa-solid fa-cart-plus"></i>
                </spam>
                <p class="precio">
                    $1,920.00
                    <span>
                        $3,840.00
                    </span>
                </p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img">
                <img src="Img/Botas.png" alt="DC COURT GRAFFIK">
                <span class="descuento">-20%</span>
                <div class="btn-group">
                    <span>
                        <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-heart-circle-plus"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-share"></i>
                    </span>
                </div>
            </div>
            <div class="product-star">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>
                    DC COURT GRAFFIK
                </h3>
                <spam class="car-agregar">
                    <i class="fa-solid fa-cart-plus"></i>
                </spam>
                <p class="precio">
                    $1,080.00
                    <span>
                        $1,350.00
                    </span>
                </p>
            </div>
        </div>
        <div class="product-card">
            <div class="product-img">
                <img src="Img/Araña.png" alt="DC COURT GRAFFIK">
                <span class="descuento">-25%</span>
                <div class="btn-group">
                    <span>
                        <i class="fa-solid fa-eye"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-heart-circle-plus"></i>
                    </span>
                    <span>
                        <i class="fa-solid fa-share"></i>
                    </span>
                </div>
            </div>
            <div class="product-star">
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>
                    DC COURT GRAFFIK
                </h3>
                <spam class="car-agregar">
                    <i class="fa-solid fa-cart-plus"></i>
                </spam>
                <p class="precio">
                    $1,975.00
                    <span>
                        $2,500.00
                    </span>
                </p>
            </div>
        </div>
    </div>
    </div>

    <ul class="menu-redes">
        <div class="menu-toggle">
            <i class="fa-solid fa-envelope"></i>
        </div>
            <li style="--i:0;--clr:#1E68F2;">
                <a href="https://www.facebook.com/profile.php?id=61557542833391&mibextid=ZbWKwL">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </li>
            <li style="--i:1;--clr:red;">
                <a href="https://www.instagram.com/cuatropataa?igsh=YmFlNmMwajB3Y2lm">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li style="--i:2;--clr:aqua;">
                <a href="https://www.tiktok.com/@cuatro_pataa?_t=8lX4PSlV9wT&_r=1">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </li>
            <li style="--i:3;--clr:#51FF00;">
                <a href="https://whatsapp.com/channel/0029VaawN8r4SpkH4akgjG1C">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </li>
    </ul>

    <script src="js/Principal.js"></script>
    <script src="js/BarMenu.js"></script>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>