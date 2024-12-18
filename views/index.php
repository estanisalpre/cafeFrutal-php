<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Frutal - Medellin</title>
    <!--SEO-->
    <meta name="description" content="Disfruta de un buen café en Medellin. En Café Frutal te garantizamos una experiencia única con productos artesanales deliciosos acompañados de buenos cafés. Vendemos al por mayor y aceptamos todos los medios de pagos.">
    <meta name="keywords" content="cafe, medellin café, café en medellín, productos artesanales, pasteleria horneada, pasteleria congelada, café y croissant, café ambientado, café frutal, cafe frutal">
    <meta name="robots" content="index, follow">
    <!--VINCULACIÓN STYLES-->
    <link rel="stylesheet" href="/public/styles/styles.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="/public/imgs/logo/logo_planta.png" type="image/x-icon">
    <!--FUENTES GOOGLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu_hamburguesa" id="menu_hamburguesa">
            <div class="titulo_hamburguesa">
                <ul>
                    <li>Menu</li>
                    <li><img id="cerrar_menu" src="/public/imgs/icons/cerrar_icono.png" alt="Ícono Cerrar Menú Hamburguesa"></li>
                </ul>
            </div>
            <div class="links_hamburguesa">
                <ul>
                    <li><img class="li_01" src="/public/imgs/icons/taza_cafe.png" alt=""><a href="#nosotros">NOSOTROS</a></li>
                    <li><img class="li_02" src="/public/imgs/icons/cafe_granos_2.png" alt=""><a href="#productos">PRODUCTOS</a></li>
                    <li><img class="li_03" src="/public/imgs/icons/planta_cafe.png" alt=""><a href="#contacto">CONTACTO</a></li>
                    <button><a href="/public/downloads/Carta_CafeFrutal.pdf" download="Carta_CafeFrutal" class="cartaCafefrutalHamburguesa">Nuestra carta</a></button>
                    <button id="adminButtonBurguer" class="adminButtonHamburguesa">🔒Administración</button>
                    <button id="logOutButton" class="logOutButtonHamburguesa">Cerrar Sesión</button>
                </ul>
            </div>
            <div class="redes_hamburguesa">
                <a href="https://www.instagram.com/cafefrutal/"><img src="/public/imgs/icons/instagram.png" alt="Ícono Instagram"></a>
                <a href="https://www.facebook.com/CafeFrutal"><img src="/public/imgs/icons/facebook.png" alt="Ícono Facebook"></a>
                <a href="https://wa.me/573206214348?text=¡Hola!%20Quiero%20contactarme%20con%20Café%20frutal"><img src="/public/imgs/icons/whatsapp.png" alt="Ícono Whatsapp"></a>
            </div>
    </div>
    <!--NAV-->
    <nav>
        <ul class="ul_nav">
            <li><a href="/"><img src="/public/imgs/logo/logo_horizontal.png" alt="Logo Café Frutal Horizontal"></a></li>
            <li><a href="#nosotros">NOSOTROS</a></li>
            <li><a href="#productos">PRODUCTOS</a></li>
            <li><a href="#contacto">CONTACTO</a></li>
        </ul>
        <button class="buttonCarta"><a href="/public/downloads/Carta_CafeFrutal.pdf" download="Carta_CafeFrutal" class="cartaCafeFrutal">Nuestra carta</a></button>
        <button id="adminButton" class="adminButton">🔒Administración</button>
        <button id="logOutButton" class="logOutButton">Cerrar Sesión</button>
        <img class="icon_hamburguesa" id="icon_hamburguesa" src="/public/imgs/icons/menu_hamburguesa.png" alt="Ícono Menu Hamburguesa">
    </nav>
    <!--MAIN-->
    <main>
        <figure class="contenedor_whatsapp" id="contenedor_whatsapp">
            <a href="https://wa.me/573206214348?text=¡Hola!%20Quiero%20contactarme%20con%20Café%20frutal"><img class="aspect" src="/public/imgs/icons/whatsapp.png" alt="Logo whatsapp"></a>
        </figure>
        <section class="contenedor_principal">
            <figure class="contenedor_carrousel">
                <ul>
                    <li class="carrousel_01"><img class="img_01 aspect" src="/public/imgs/cafe_frutal/local_nocturno.webp" alt="Local de Café Frutal Nocturno"></li>
                    <li class="carrousel_02"><img class="img_02 aspect" src="/public/imgs/cafe_frutal/taza_08.webp" alt="Taza de Café exhibida y servida"></li>
                    <li class="carrousel_03"><img class="img_03 aspect" src="/public/imgs/cafe_frutal/local_interior.webp" alt="Imagen del interior del local Café Frutal"></li>
                </ul>
            </figure>
            <article class="contenedor_titulos">
                <div class="contenedor_derecho">
                    <article class="titulo_presentacion">
                        <h1>Café Frutal</h1>
                        <h2>Donde el amor se define con una taza de café ☕❤️</h2>
                        <p>Vivimos el centro de la ciudad desde un acogedor espacio que huele a café, familia y amigos, 
                            en el que contemplamos el Arte y la cultura que se condensa en la periferia. <br> <br>
                            Generamos cultura y que creamos experiencias con amor.</p>
                    </article>
                    <article class="links">
                        <button><a href="#horarios">Horarios</a></button>
                        <button><a href="#ubicacion">Ubicación</a></button>
                        <button><a href="#contacto">Redes</a></button>
                        <button><a href="/public/downloads/Carta_CafeFrutal.pdf" download="Carta_CafeFrutal">Nuestra carta</a></button>
                    </article>
                </div>
                <img class="logo_fondo_animado" src="/public/imgs/logo/logo_planta.png" alt="Logo Fondo Movimiento">
            </article>
        </section>
        <section class="contenedor_frase" id="nosotros">
            <article class="frase">
                <h3>Fundado en 2012</h3>
                <p>'Nuestro objetivo siempre ha sido llegarle a nuestros clientes, contarles una historia acerca del café, donde le brindamos una experiencia con los diferentes métodos de elaboración. <br> <br>
                Para nosotros, lo más importante es que el cliente nos recuerde por una experiencia linda y que hable bien de nosotros'</p>
            </article>
        </section>
        <section class="contenedor_productos" id="productos">
            <article class="cont_superior_titulo">
                <h1>Nuestros deliciosos productos</h1>
            </article>
            <div class="cont_inferior_productos">
                <article class="contenedor_cafes">
                    <h1>Café Especialidad<img class="aspect" src="/public/imgs/icons/producto_cafe.png" alt="Ícono Bolsa Café"></h1>
                    <article class="productos_cafes">
                        <div class="cafe_01">
                            <img  src="/public/imgs/products/cafe_anayansi.webp" alt="Café Anayansi">
                            <h2>ANAYANSI</h2>
                            <button id="firstDiv">¡Quiero esto!</button></a>
                        </div>
                        <div class="cafe_02">
                            <img  src="/public/imgs/products/cafe_cochadas.webp" alt="Café Cochadas">
                            <h2 id="spanCoffeeName">COCHADAS</h2>
                            <button id="secondDiv">¡Quiero esto!</button></a>
                        </div>
                        <div class="cafe_03">
                            <img  src="/public/imgs/products/cafe_deorigen.webp" alt="Café de Origen">
                            <h2>DE ORIGEN</h2>
                            <button id="thirdDiv">¡Quiero esto!</button></a>
                        </div>
                        <div class="cafe_04">
                            <img  src="/public/imgs/products/cafe_lunaazul.webp" alt="Café Luna azul">
                            <h2>LUNA AZUL</h2>
                            <button id="fourthDiv">¡Quiero esto!</button></a>
                        </div>
                        <div class="seeAllProducts" id="seeAllProducts">
                            <img  src="/public/imgs/icons/moreProducts.png" alt="Ícono Ver Más (Lupa)">
                            <button id="moreProductsButton">VER MÁS</button></a>
                        </div>
                    </article>
                    <p>Nuestros productos son 100% artesanales y elaborados con amor. <br> <br> Somos distribuidores de café especialidad y productos congelados <a href="https://wa.me/573206214348?text=¡Hola!%20Quiero%20información%20sobre%20sus%20productos%20al%20por%20mayor"><button>Saber más</button></a> </p>
                </article>
                <div class="cont_productos_derecho">
                    <article class="contenedor_pasteleria_reposteria">
                        <h1>Pastelería <img src="/public/imgs/icons/pasteleria.png" alt="Ícono Pasteleria"> Respostería <img src="/public/imgs/icons/reposteria.png" alt="Ícono Reposteria"></h1>
                        <figure class="pasteleria_productos">
                            <figure class="pasteleria_izquierdo">
                                <img src="/public/imgs/products/canela_roll.webp" alt="Producto: Rollo de Canela">
                            </figure>
                            <figure class="pasteleria_derecho">
                                <img class="aspect" src="/public/imgs/products/muffin.webp" alt="Producto: Muffin delicioso">
                                <img class="aspect" src="/public/imgs/products/sandwich.webp" alt="Producto: Sandwich para almuerzo">
                                <img class="aspect" src="/public/imgs/products/almuerzo.webp" alt="Producto: Plato de almuerzo con champignones">
                                <img class="aspect" src="/public/imgs/products/rollo_01.webp" alt="Producto: Rollo de Canela">
                                <img class="aspect" src="/public/imgs/products/rollo_02.webp" alt="Producto: Rollo de Canela">
                                <img class="aspect" src="/public/imgs/products/muffin_2.webp" alt="Producto: Muffin delicioso">
                                <img class="aspect" src="/public/imgs/products/cheesecake_frutos_rojos.webp" alt="Producto: Cheesecake Frutos rojos">
                                <img class="aspect" src="/public/imgs/products/cheesecake_maracuya.webp" alt="Producto: Cheesecake Maracuya">
                                <img class="aspect" src="/public/imgs/products/postres.webp" alt="Producto: Postres variados en sabores">
                                <img class="aspect" src="/public/imgs/products/rollo_03.webp" alt="Producto: Rollo de Canela">
                                <img class="aspect" src="/public/imgs/products/alfajores.webp" alt="Producto: Alfajores artesanales argentinos">
                                <img class="aspect" src="/public/imgs/products/croissant.webp" alt="Producto: Pan Croissant Artesanal">
                            </figure>
                        </figure>
                    </article>
                </div>
            </div>
        </section>
        <section class="cont_informacion_comercial" id="horarios">
            <article class="horarios">
                <h1 onclick="trysomething()">Horarios</h1>
                <article class="horario_01">
                    <h2>Lunes a Jueves</h2>
                    <p>09:00am - 09:30pm</p>
                </article>
                <article class="horario_02">
                    <h2>Viernes y Sábado</h2>
                    <p>09:00am - 10:30pm</p>
                </article>
            </article>
            <img class="cafe_central" src="/public/imgs/icons/cafe_granos_2.png" alt="">
            <article class="medio_de_pago">
                <article class="medios">
                    <h1>Medios de pago</h1>
                    <h2>Efectivo, débito, crédito y transferencias</h2>
                </article>
                <figure class="logos_pagos">
                    <img src="/public/imgs/icons/logo_visa.png" alt="Logo Visa">
                    <img src="/public/imgs/icons/mastercard.png" alt="Logo Mastercard">
                    <img src="/public/imgs/icons/bancolombia.png" alt="Logo Bancolombia">
                    <img src="/public/imgs/icons/nequi.png" alt="Logo Nequi">
                </figure>
            </article>
        </section>
        <section class="cont_ubicacion_reseñas" id="ubicacion">
            <div class="ubicacion">
                <h1>Encuéntranos en Carrera 40 # 52-29, Medellin, Antioquia</h1>
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1197403682418!2d-75.56232158863321!3d6.247948393714359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44285886e2cddd%3A0x7a34162721a490ff!2sCAF%C3%89%20FRUTAL!5e0!3m2!1ses!2sco!4v1722205892158!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="tazasCafe">
                <h1>Nuestro arte 🤎☕</h1>
                <figure class="contTazasCafe">
                    <img class="aspect" src="/public/imgs/cafe_frutal/taza_01.webp" alt="Una exquisita taza de café para la tarde">
                    <img class="aspect" src="/public/imgs/cafe_frutal/taza_02.webp" alt="Una exquisita taza de café para el algo">
                    <img class="aspect" src="/public/imgs/cafe_frutal/taza_03.webp" alt="Una exquisita taza de café para desayunar">
                    <img class="aspect" src="/public/imgs/cafe_frutal/taza_04.webp" alt="Una exquisita taza de café para acompañar">
                    <img class="aspect" src="/public/imgs/cafe_frutal/taza_05.webp" alt="Una exquisita taza de café para almorzar">
                </figure>
            </div>
        </section>
        <section class="contenedor_contacto" id="contacto">
            <div class="tarjeta_contacto">
                <article class="formulario_contacto">
                    <div class="titulo_formulario">
                        <h1>Contáctanos</h1>
                        <p>Puedes comunicarte con nosotros por los siguientes medios:</p>
                    </div>
                    <div class="direccion_comercial">
                        <div class="informacion_01">
                            <h2>Dirección</h2>
                            <p>Carrera 40 # 52-29, Medellin, Antioquia</p>
                        </div>
                        <div class="informacion_02">
                            <h2>Teléfono</h2>
                            <p>+57 320 6214348</p>
                        </div>
                        <div class="informacion_03">
                            <h2>Correo electrónico</h2>
                            <p>cafefrutal@gmail.com</p>
                        </div>
                    </div>
                    <figure class="redes_form">
                        <figure class="redes_01">
                            <a href="https://www.facebook.com/CafeFrutal"><img src="/public/imgs/icons/facebook.png" alt="Logo Facebook"></a>
                            <a href="https://www.facebook.com/CafeFrutal">Café Frutal</a>
                        </figure>
                        <figure class="redes_02">
                            <a href="https://www.instagram.com/cafefrutal/"><img  src="/public/imgs/icons/instagram.png" alt="Logo Instagram"></a>
                            <a href="https://www.instagram.com/cafefrutal/">@cafefrutal</a>
                        </figure>
                    </figure>
                </article>
            </div>
        </section>
        <section id="sectionForm" class="sectionForm">
            <form action="login.php" method="POST" class="loginForm">
                <span id="errorMessage">❌Credenciales incorrectas</span>
                <p>Ingresa tus credenciales</p>
                <input type="text" name="userName" id="userName" required placeholder="Usuario" maxlength="11">
                <input type="password" name="password" id="password" required placeholder="Contraseña" maxlength="17">
                <button id="submitLogin" type="submit">Ingresar</button>
                <button id="backButton">Regresar</button>
            </form>
            <?php
                // Mostrar error si las credenciales son incorrectas
                if (isset($error)) {
                    echo "<p>$error</p>";
                }
            ?>
        </section>
    </main>
    <!--FOOTER-->
    <footer>
        <img class="aspect" src="/public/imgs/logo/logo_horizontal_light.png" alt="Logo Claro Horizontal Cafe Frutal">
        <article class="info_footer">
            <p class="primer_p">Web Desarrollada por</p>
            <p class="segundo_p">Estanislao Salinas Previte - estanisprevite@hotmail.com</p>
        </article>
    </footer>
    <!--VINCULACIÓN JS-->
    <script type="module" src="/public/js/main.js"></script>
</body>
</html>
