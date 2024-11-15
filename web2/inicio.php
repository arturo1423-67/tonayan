<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location:web/inicio.php");

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diseño web tipo blog - para practica</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="img/">
    <link rel="stylesheet" href="css/pagina.css">
    <link rel="stylesheet" href="css/inicio.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

    <!--Header - menu-->
    <header>

        <div class="header-content">

            <div class="logo">
                <h1>El gato<b>concentido</b>.</h1>
            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                        <li class="menu-selected"><a href="inicio.html" class="text-menu-selected"> 
                        <i class="fas fa-file-alt"></i>Inicio</a></li><li><a href="#"> 
                        <i class="fas fa-home"></i> Carrito</a></li>
                        <li><a href="registro.php"> <i class="fab fa-youtube"> </i>Cuenta</a></li>
                        <li><a href="registro.php"> <i class="fas fa-headset"></i> Cerrar sesion</a></li>
                    </ul>
                </nav>

            </div>

            

        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>


    <!--Portada-->

    <div class="container-all" id="move-content">

    
    <div class="blog-container-cover">
        <div class="container-info-cover">
            <h1>¡Encuentra tus productos de interes!</h1>
            <p>Todo lo que sea solo para la salud y beneficio de tu gato esta aqui.</p>
        </div>
    </div>

    <div class="container-post">

        <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
        <input type="radio" id="HTML" name="categories" value="HTML">
        <input type="radio" id="CSS" name="categories" value="CSS">
        <input type="radio" id="JS" name="categories" value="JS">
        <input type="radio" id="PHP" name="categories" value="PHP">
        <input type="radio" id="NODEJS" name="categories" value="NODEJS">
        <input type="radio" id="VUE" name="categories" value="VUE">

        <div class="container-category">
            <label for="TODOS">TODOS</label>
            <label for="HTML">Alimento</label>
            <label for="CSS">Juguetes</label>
            <label for="JS">Limpieza</label>
            <label for="PHP">Aseo</label>
            <label for="NODEJS">Acesorios</label>
            <label for="VUE">Camas</label>
        </div>

        <div class="posts">

            <div class="post" data-category="CSS">

                <div class="ctn-img">
                    <img src="img/vara-cat.jpeg" alt="">
                </div>
                <h2>Vara  con un pajaro para jugar con tu gato.</h2>
                <span>$25</span>
                <ul class="ctn-tag">
                    <li>Vara</li>
                    <li>Juguete</li>
                </ul>
                <a href="vara-cat.html"><button>Leer más</button></a>

            </div>

            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/minino.jpg" alt=""></div>
                <h2>Croketas-minino (10kg).</h2>
                <span>$481</span>
                <ul class="ctn-tag">
                    <li>Minino</li><li>Croketas</li>
                </ul>
                <a href="minino.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/whiskas.jpg" alt=""></div>
                <h2>Croketas-whiskas (1.5kg).</h2>
                <span>$65</span>
                <ul class="ctn-tag">
                    <li>Whiskas</li><li>Croketas</li>
                </ul>
                <a href="Whiskas.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/cepillo-cat2.jpg" alt=""></div>
                <h2>Cepillos para Gatos para Gatos Interior,Pelo Gato, Pelo Gato, 
                    Peine Gato para Masaje Cachorros Que Elimina esteras, enredos.</h2>
                    <span>$70</span>
                <ul class="ctn-tag">
                    <li>Cepillo</li><li>Aseo</li>
                </ul>
                <a href="cepillo-cat2.html"><button>leer más</button></a>

            </div>
            <div class="post" data-category="VUE ">

                <div class="ctn-img"><img src="img/cama-cat5.jpg" alt=""></div>
                <h2>Árbol para Gatos, Torre para Gatos con Postes rascadores Cubiertos de sisal,
                     Cama para Gatos y Cueva, condominio para Gatos de Interior.</h2>
                     <span>$590</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                    
                </ul>
                <a href="cama-cat5.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS">

                <div class="ctn-img"><img src="img/arena-3kg.avif" alt=""></div>
                <h2>arena sin olor neutralisante paara tus gatos</h2>
                <span>$20</span>
                <ul class="ctn-tag">
                    <li>Arena</li><li>Limpieza</li>
                </ul>
                <a href="arena-3kg.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/collar-cat.jpg" alt=""></div>
                <h2>Collar para gatos de todas las edades con cascabel.</h2>
                <span>$25</span>
                <ul class="ctn-tag">
                    <li>Collares</li><li>Acesorios</li>
                </ul>
                <a href="collar-cat.html"><button>leer más</button></a>

            </div>


            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/purina.jpg" alt=""></div>
                <h2>Croketas-purina (3kg).</h2>
                <span>$180</span>
                <ul class="ctn-tag">
                    <li>Purina</li><li>Croketas</li>
                </ul>
                <a href="purinad.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/shampooo.jfif" alt=""></div>
                <h2>Fancy Pets Shampoo Essentials para Gato de 250 mililitros, Limpieza Profunda, Pelo Suave y Luminoso.</h2>
                <span>$64</span>
                <ul class="ctn-tag">
                    <li>Shampoo</li><li>Aseo</li>
                </ul>
                <a href="shampoo-fancy.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/cepillito-cat.jpg" alt=""></div>
                <h2>Cepillo de vapor para gatos, herramienta de aseo para mascotas para quitar y limpiar, 
                    el mejor cepillo de pelo de gato con agua 3 en 1.</h2>
                    <span>$45</span>
                <ul class="ctn-tag">
                    <li>Cepillo</li><li>Aseo</li>
                </ul>
                <a href="cepillo-cat3.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/cuento-cat.jpg" alt=""></div>
                <h2>Cuenco de comida para gatos de dos colores.</h2>
                <span>$126</span>
                <ul class="ctn-tag">
                    <li>Cuenco</li><li>Acesorios</li>
                </ul>
                <a href="cuenco-cat2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/nupec-cat.jpg" alt=""></div>
                <h2>Croketas-nupec (15kg).</h2>
                <span>$550</span>
                <ul class="ctn-tag">
                    <li>Nupec</li><li>Croketas</li>
                </ul>
                <a href="nupec-cat.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/felix-sobre.jpg" alt=""></div>
                <h2>sobre-felix.</h2>
                <span>$9</span>
                <ul class="ctn-tag">
                    <li>Whiskas</li><li>Croketas</li>
                </ul>
                <a href="sobred2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE">

                <div class="ctn-img"><img src="img/cama-cat2.jpg" alt=""></div>
                <h2>Cama para Perro y Gato, 60cm de Diámetro Cama para Mascotas Pequeñas con Parte Inferior Antideslizante y Cómodo Mullida Felpa,
                     Redonda Suave Sofá Cama para Mascotas Pequeños.</h2>
                     <span>$250</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                </ul>
                <a href="cama-cat2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE">

                <div class="ctn-img"><img src="img/cama-cat4.jpg" alt=""></div>
                <h2>Cama para Gatos, Nido con cojín extraíble, salón para Gatos, cómodo Tablero rascador para Gatos,
                     casa para Mascotas para Perros pequeños, Cachorros y, Almohada Blanca $350</h2>
                     <span>$350</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                    
                </ul>
                <a href="cama-cat4.html"><button>leer más</button></a>

            </div>


            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/sobre-felix.jpg" alt=""></div>
                <h2>Sobre-felix.</h2>
                <span>$8</span>
                <ul class="ctn-tag">
                    <li>purina</li><li>Croketas</li>
                </ul>
                <a href="felix-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/cuenco.jfif" alt=""></div>
                <h2>Cuenco de comida para gatos.</h2>
                <span>$85</span>
                <ul class="ctn-tag">
                    <li>Cuenco</li><li>Acesorios</li>
                </ul>
                <a href="cuenco-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/cepillo.jfif" alt=""></div>
                <h2>Cepillos de Aseo para Mascotas para Perros y Gatos Removedor de Pelo con Flexible de Acero Inoxidable y Puntos de Goma, 
                    Shedding Tool para Gatos, Perros, Conejos (Gray)</h2>
                    <span>$55</span>
                <ul class="ctn-tag">
                    <li>Cepillo</li><li>Aseo</li>
                </ul>
                <a href="cepillo-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS ">

                <div class="ctn-img"><img src="img/olores-cat.jpg" alt=""></div>
                <h2>Neutralisador de olores.</h2>
                <span>$120</span>
                <ul class="ctn-tag">
                    <li>Aerosol</li>
                    <li>Limpieza</li>
                </ul>
                <a href="olores-cat.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/whiskas-sobre.jpg" alt=""></div>
                <h2>Sobre-whiskas.</h2>
                <span>$8</span>
                <ul class="ctn-tag">
                    <li>Whiskas</li><li>Croketas</li>
                </ul>
                <a href="sobre-whiskas.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/quieta-pelo-cat.jpg" alt=""></div>
                <h2>Quitapelos y Rodillos para Mascotas, Removedor de Pelo para Mascotas, 
                    Cepillo de Limpieza Removedor de Pelaje para Gatos y Perros,
                     para alfombras, Ropa y sofá (1 PC).</h2>
                     <span>$45</span>
                <ul class="ctn-tag">
                    <li>Cepillo</li><li>Aseo</li>
                </ul>
                <a href="quita-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE">

                <div class="ctn-img"><img src="img/cama-cat6.jpg" alt=""></div>
                <h2>Cama Casa Gato Perro Cachorro Mascota Cojin Suave Acolchada Cama Tipo Cueva,
                    Cama portátil para Cueva de Gato,Lavable,Cómoda y cálida,Nido Tipo Cueva.</h2>
                    <span>$180</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                    
                </ul>
                <a href="cama-cat6.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS ">

                <div class="ctn-img"><img src="img/Arena Scoop away.jpg" alt=""></div>
                <h2>Arena Scoop Away, Arena aromática para gatos, 42 libras</h2>
                <span>$659</span>
                <ul class="ctn-tag">
                    <li>Arena</li>
                    <li>Limpieza</li>
                </ul>
                <a href="arenad.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/mochila-cat.jpg" alt=""></div>
                <h2>Mochila para transportar a tu gato a todos lados.</h2>
                <span>$135</span>
                <ul class="ctn-tag">
                    <li>Transportador</li><li>Acesorios</li>
                </ul>
                <a href="mochila-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="HTML">

                <div class="ctn-img"><img src="img/whiskas-cat.jpg" alt=""></div>
                <h2>Sobre-whiskas.</h2>
                <span>$8</span>
                <ul class="ctn-tag">
                    <li>Whiskas</li><li>Croketas</li>
                </ul>
                <a href="whiscas-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS ">

                <div class="ctn-img"><img src="img/arenero-cat2.jpg" alt=""></div>
                <h2>Caja de arena para gato, bandeja semicerrada para gatos, caja de arena con tapa adecuado para gatos pequeños y medianos </h2>
                <span>$270</span>
                <ul class="ctn-tag">
                    <li>Arenero</li>
                    <li>Limpieza</li>
                </ul>
                <a href="arenero-cat2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE">

                <div class="ctn-img"><img src="img/cama.webp" alt=""></div>
                <h2>Cama De Gato para Gatos De Interior,Cama De Gato Lavable, Casa para Gatos Interior, Nido de Mascotas,
                    Cama para Gato o casa apartamento,Bola mullida para Colgar y rascar.</h2>
                    <span>$200</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                    
                </ul>
                <a href="camad.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="CSS">

                <div class="ctn-img"><img src="img/rascador-cat.jpg" alt=""></div>
                <h2>Fancy Pets Poste Rascador de 55 centímetros para Gato Color Natural. </h2>
                <span>$45</span>
                <ul class="ctn-tag">
                    <li>Rascador</li><li>Juguete</li>
                </ul>
                <a href="rascador-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/shampoo-cat2.jpg" alt=""></div>
                <h2>Champú desodorante y reductor de caspa 2 en 1 para gatos.</h2>
                <span>$78</span>
                <ul class="ctn-tag">
                    <li>Shampoo</li><li>Aseo</li>
                </ul>
                <a href="shampoo-cat2.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/collares-cat.jpg" alt=""></div>
                <h2>Collares para personalisar con el nombre de tu amigito.</h2>
                <span>$35</span>
                <ul class="ctn-tag">
                    <li>collar</li><li>Acesorios</li>
                </ul>
                <a href="collar-cat2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE">

                <div class="ctn-img"><img src="img/cama-cat.jpg" alt=""></div>
                <h2>Cama Cueva para Gatos/Perros pequeños, tienda de campaña para Gatos 2 en 1 con Calentamiento automático de Terciopelo/Cama para Gatitos,
                    Cabaña para Gatos con cojín extraíble. </h2>
                    <span>$199</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                </ul>
                <a href="cama-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS ">

                <div class="ctn-img"><img src="img/arena-fres-step.jpg" alt=""></div>
                <h2>Arena perfumada Fresh Step Extreme sobre el poder de Febreze. </h2>
                <span>$695</span>
                <ul class="ctn-tag">
                    <li>Arena</li>
                    <li>Limpieza</li>
                </ul>
                <a href="arena-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE CSS">

                <div class="ctn-img"><img src="img/cama-cat8.jpg" alt=""></div>
                <h2>Árbol Trepador y Rascador para Gatos, Torre de Actividades de Varios Niveles, Castillo con Escaleras, Hamaca,
                     Cubiertas de Felpa, Seguro y Duradero. </h2>
                     <span>$890</span>
                <ul class="ctn-tag">
                    <li>Cama</li><li>Juguete</li>
                    
                </ul>
                <a href="cama-cat8.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="CSS">

                <div class="ctn-img"><img src="img/rascador-cat2.jpg" alt=""></div>
                <h2>Rascador para Gatos, Rascador para Gatos Cactus para Todos los Gatos.</h2>
                <span>$240</span>
                <ul class="ctn-tag">
                    <li>Rascador</li><li>Juguete</li>
                </ul>
                <a href="rascador-cat2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS">

                <div class="ctn-img"><img src="img/arenero Sophresh.jfif" alt=""></div>
                <h2>Arenero para Gato Con Paredes Altas, Gigante, Colores Surtidos</h2>
                <span>$125</span>
                <ul class="ctn-tag">
                    <li>Arenero</li><li>Limpieza</li>
                </ul>
                <a href="arenerod.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/correa-cat.jpg" alt=""></div>
                <h2>Corrrea para sacar a paciar a tu amigo.</h2>
                <span>$45</span>
                <ul class="ctn-tag">
                    <li>Correa</li><li>Acesorios</li>
                </ul>
                <a href="correa-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS ">

                <div class="ctn-img"><img src="img/arena-cat.jpg" alt=""></div>
                <h2>Arena fancy pets para los residuos de tus gatos, elimina el olor al momento. </h2>
                <span>$49</span>
                <ul class="ctn-tag">
                    <li>Arena</li>
                    <li>Limpieza</li>
                </ul>
                <a href="arena-cat2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE ">

                <div class="ctn-img"><img src="img/cama-cat7.jpg" alt=""></div>
                <h2> Árbol para Gatos, Torre Pequeño de Gatos con Plataforma Acolchada, Cueva para Gatos,
                     3 Pompones, Centro de Actividades para Gatos. </h2>
                     <span>$850</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                    
                </ul>
                <a href="cama-cat7.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/shampoo-cat.jpg" alt=""></div>
                <h2>Gato Consentido - Foam de Limpieza en Seco,  Shampoo en Seco para Gatos, 
                    Ideal para Mantener la Higiene de tu Mascota, 150 ml. </h2>
                    <span>$99</span>
                <ul class="ctn-tag">
                    <li>Shampoo</li><li>Aseo</li>
                </ul>
                <a href="shampoo-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="CSS">

                <div class="ctn-img"><img src="img/pajaro-cat.jpg" alt="">
                </div>
                <h2>Juguetes interactivos de Plumas para gatos, Varita retráctil Encantadora para gatos.</h2>
                <span>$115</span>
                <ul class="ctn-tag">
                    <li>Vara</li>
                    <li>Juguete</li>
                </ul>
                <a href="vara-cat2.html"><button>Leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/corta.jfif" alt=""></div>
                <h2>Fancy Pets Tijera Cortauñas para Gato Tamaño Grande.</h2>
                <span>$35</span>
                <ul class="ctn-tag">
                    <li>Cortauñas</li><li>Aseo</li>
                </ul>
                <a href="cortauñas-cat.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/fuente-cat.jpg" alt=""></div>
                <h2>Fuente para agua, bebedero en forma de fuente.</h2>
                <span>$85</span>
                <ul class="ctn-tag">
                    <li>bebedero</li><li>Acesorios</li>
                </ul>
                <a href="fuente-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="CSS">

                <div class="ctn-img"><img src="img/pajaro-cat2.jpg" alt=""></div>
                <h2>Juguetes Interactivos para Gatos, Juguetes de Pájaros de Chirriante con Hierba Gatera</h2>
                <span>$80</span>
                <ul class="ctn-tag">
                    <li>Pajaro</li><li>Juguete</li>
                </ul>
                <a href="pajaros-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="VUE">

                <div class="ctn-img"><img src="img/cama-cat3.jpg" alt=""></div>
                <h2>Cama para mascotas con forma de rana, cómoda cama semiabierta, cálida y lavable a máquina, 
                     adecuado para mascotas de tamaño pequeño y mediano.</h2>
                     <span>$450</span>
                <ul class="ctn-tag">
                    <li>Cama</li>
                    
                </ul>
                <a href="cama-cat3.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS ">

                <div class="ctn-img"><img src="img/arena-cat2.jpg" alt=""></div>
                <h2>Arena para Gato Bolsa 10 kg, Premium Control Total, Rápida Absorción de líquidos, Eliminación Total de olores al Contacto.</h2>
                <span>$490</span>
                <ul class="ctn-tag">
                    <li>Arena</li>
                    <li>Limpieza</li>
                </ul>
                <a href="arena-cat3.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="PHP">

                <div class="ctn-img"><img src="img/aseo-cat.jpg" alt=""></div>
                <h2>Hamaca de aseo para gatos, arnés de aseo para perros y gatos, 
                    bolsa de recortes de uñas, accesorios para mascotas para bañarse, 
                    recortar/recortar uñas.</h2>
                    <span>$136</span>
                <ul class="ctn-tag">
                    <li>Shampoo</li><li>Aseo</li>
                </ul>
                <a href="aseo-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="CSS">

                <div class="ctn-img"><img src="img/ratones-cat.jpg" alt=""></div>
                <h2>Juguete de ratón de Peluche para Gatos, Interactivo de Hierba gatera de simulación para Gatos y Gatitos de Interior</h2>
                <span>$25</span>
                <ul class="ctn-tag">
                    <li>Ratones</li>
                    <li>Juguete</li>
                </ul>
                <a href="ratones-cat.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="CSS">

                <div class="ctn-img"><img src="img/pescado-cat.jpg" alt=""></div>
                <h2>Juguetes Pez para Gatos - Juguete interactivo hierba gatera, pez de simulación de felpa móvil con carga USB, suministros para gatos que se Pueden usar para morder, patear y dormir.</h2>
                <span>$40</span>
                <ul class="ctn-tag">
                    <li>Pajaro</li><li>Juguete</li>
                </ul>
                <a href="pescado-cat.html"><button>leer más</button></a>

            </div>

            
            <div class="post" data-category="NODEJS">

                <div class="ctn-img"><img src="img/mochila-cat2.jpg" alt=""></div>
                <h2>Transportadora para Perro y Gato, Bolsa de Mascotas Plegable, Transpirable Mochila para Gato con Correa de Hombro Ajustable.</h2>
                <span>$285</span>
                <ul class="ctn-tag">
                    <li>Transportador</li><li>Acesorios</li>
                </ul>
                <a href="mochila-cat2.html"><button>leer más</button></a>

            </div>

            <div class="post" data-category="JS ">

                <div class="ctn-img"><img src="img/arenero-cat.jpg" alt=""></div>
                <h2>caja de arena para gatos con capucha, inodoro grande para gatos, arenero, suministros para mascotas, bandeja de arena para gatos, caja de arena.</h2>
                <span>$420</span>
                <ul class="ctn-tag">
                    <li>Arenero</li>
                    <li>Limpieza</li>
                </ul>
                <a href="arenero-cat.html"><button>leer más</button></a>

            </div>

            

        </div>

    </div>


    <div class="container-footer">	

        <footer> 
            <div class="logo-footer">
                <a href="acerca-cat.html" ><img src="img/logo-cat.png" alt=""></a>
                
            </div>

            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="https://www.instagram.com/el_gato_concentido/?utm_source=ig_web_button_share_sheet"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>

            <hr>
            <h4>© 2024 El-gato-concentido - Todos los Derechos Reservados</h4>

        </footer>

    </div>

</div>

    <script src="js/script.js"></script>
</body>
</html>