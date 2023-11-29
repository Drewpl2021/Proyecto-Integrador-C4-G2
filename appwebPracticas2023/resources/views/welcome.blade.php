<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bolsa Laboral</title>
    <link rel='stylesheet' href='/stylesheets/style.css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body style="position: relative; background: url('/images/Fondoprincipal.jpg') no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">
    <div style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(255, 255, 255, 0.5); z-index: -1;"></div>
    <!--Encabezado-->
    <nav x-data="{ open: false }"
        style="background-color: #041433;
  background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);
  z-index: 1;
  ">
        <div class=" ml-12 px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-24 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button x-on:click="open=!open" type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center  sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-8 w-auto lg:hidden" style="marg width: 100px; height: 50px;"
                            src="images/logo2.png" style="width: 200px; height: 100px; position: relative;"
                            alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block" style="width: 100px; height: 50px;"
                            src="images/logo2.png" style="width: 200px; height: 100px; position: relative;"
                            alt="Your Company">
                    </div>
                </div>
                <div>
                    <div class="hidden sm:ml-6 sm:block " style="display: flex;">
                        <div class="login-box flex space-x-4 text-center justify-center">
                            <a href="/" class="login-box text-white px-3 py-2 text-sm font-medium ml-12"
                                aria-current="page"
                                style="font-size: 22px; margin-top: 10px; margin-right: 20px;">Inicio</a>
                        </div>

                        <a href="#" style="font-size: 35px; color:white;">|</a>

                        <div class="login-box flex space-x-4 text-center justify-center">
                            <a href="https://upeu.edu.pe/"
                                class="login-box text-white px-3 py-2 text-sm font-medium ml-12 mr-8"
                                style="font-size: 22px; margin-top: 10px;">Quienes
                                Somos</a>
                        </div>
                        <a href="#" style="font-size: 35px; color:white;">|</a>

                        <div class="login-box flex space-x-4 text-center justify-center">


                            <a href="register" class="login-box text-white px-3 py-2 text-sm font-medium ml-12 mr-10"
                                style="font-size: 22px; margin-top: 10px;">
                                Registrarse</a>

                        </div>
                    </div>
                </div>

                <a href="#" style="font-size: 35px;  color:white;">|</a>

                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <div
                            class="login-box absolute   right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <button type="button" class="btn-1" @click="open=!open" id="user-menu-button"
                                aria-expanded="false" aria-haspopup="true">
                                <a href="login"
                                    class="bnt-1 text-white  rounded-xl  px-3 py-3 text-sm font-medium mr-16 flex  p-1  focus:outline-none  "
                                    style="font-size: 22px; margin-top: 5px;">
                                    Iniciar Sesion</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
    <div class="contenido">


        <br><br><br><br>
        <!--Inicio de main-->
        <div class="main"
            style="margin-left: 150px; margin-right: 150px; display: flex; background-color: #f5f5f5;  border-radius: 20px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            <div>
                <div
                    style="font-size: 50px; background: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);
        background-clip: text;
        -webkit-background-clip: text; /* Para compatibilidad con navegadores webkit */
        color: transparent; margin-left: 50px; margin-top: 20px; ">
                    <b> EMPLEOS PARA TODAS <br>
                        NUESTRAS CARRERAS</b>
                </div>
                <div> <a href=""
                        style="margin-left: 50px; font-size: 22px; margin-top: 250px; color:#243b55;">¡Descubre un
                        mundo lleno de oportunidades laborales! Únete a nuestra bolsa laboral<br>
                        <FONT style="margin-left: 50px;"> y déjanos abrirte las puertas</FONT>al éxito profesional.
                    </a>
                </div>
                <div style="display: flex;">
                    <button href="#" id="botonx" class=" px-8 py-3 styled-button">
                        Ver vacantes</button>
                    <a href="#contacto" id="botonx" class=" px-8 py-3 styled-button">
                        Contactanos</a>
                </div>
            </div>
            <a href="">
                <img src="images/pipipi.png" style="margin-left: 10%;  width: 700px;" alt=""></a>
        </div> <br><br><br><br>


        <div style="text-align: center;">
            <a href="" class=" "
                style=" font-size: 50px; background: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);
    background-clip: text; -webkit-background-clip: text; color: transparent; "><b>
                    Inducciones</b></a>
        </div>
        <hr class="py-0.5"
            style="  margin-right: 150px; margin-left: 150px; background-color: #041433;
    background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);">
        <br><br>
        <!--Carousel-->


        <div style="display: flex; justify-content: space-around; margin-left: 150px ; margin-right: 150px;">


            <div
                style=" justify-content: center; width: 1000px; height: 450px; background-color: #041433;
            background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%); border-radius: 20px;">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($Iinduccions as $index => $Iinduccion)
                                <div style="justify-content: center; "
                                    class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <div style="width: 700px; justify-content: center; margin-left: 145px; margin-top: 75px; background-color: rgba(0, 0, 0, 0.5) !important;"
                                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl
                                         from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                        <div style="justify-content: center; ">
                                            <div>
                                                <h1 class=" mt-6 text-3xl font-semibold text-white dark:text-white">
                                                    {{ $Iinduccion->name }}
                                                </h1>
                                                <p
                                                    class="mt-4 mb-8 text-white dark:text-gray-400 text-sm leading-relaxed">
                                                    {{ $Iinduccion->detalle }}
                                                </p>
                                                <div style="display: flex;" class=" felx mb-1 ml-10">
                                                    <div style="margin-top: 50px;">
                                                        <a href="http://127.0.0.1:8000/student/induccions"
                                                            id="basura" style=" "
                                                            class=" px-8 py-3 styled-button">Participar
                                                    </a>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev " type="button" style="margin-top: 80px;"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" style="margin-top: 80px;"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            </div>

        </div>
    </div>
    <br><br><br><br><br><br>








    <!--inicio cards-->

    <div style="text-align: center;">
        <a href="" class=" "
            style=" font-size: 50px; background: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);
    background-clip: text; -webkit-background-clip: text; color: transparent; "><b>
                Conocenos Mas</b></a>
    </div>

    <hr class="py-0.5"
        style="margin-right: 150px; margin-left: 150px; background-color: #041433;
    background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);">
    <br><br>


    <div style="margin-left: 150px; margin-right: 150px; top: 150px; text-align: center; display: flex;">

        <div
            style=" width: 450px; height: 650px; background-color: #041433;
            background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%); border-radius: 20px;">
            <article style="margin-left: 25px; top: 25px;">
                <img src="images/lasso.jpg">
                <img src="images/mujer.png">
            </article><br><br>
            <br><a class="text-white" style="font-size: 20px;"><b>Top Sunedu 2023!!!</b></a><br><br>
            <div style="text-align: justify; margin-left: 20px; margin-right: 20px;">
                <a href="" class="man" style="margin: 0 auto; color: white; ">
                    <FONT>¡Felicidades por ganar el Top Sunedu! Es un logro destacado que reconoce la calidad
                        excepcional de tu
                        institución educativa. Este reconocimiento es el resultado de tu dedicación, esfuerzo y
                        compromiso con la
                        excelencia académica. Sigue siendo un referente en la educación y continúa inspirando a otros
                        con tu
                        éxito. ¡Enhorabuena por este gran logro!</FONT>
                </a>
            </div><br><br>
            <a href="https://www.sunedu.gob.pe/lista-universidades/" class="max py-2 px-4"
                style="color: white;  "><b>
                    Ver mas <i class="fa-solid fa-angles-right"></i></b></a>
        </div>
        <div
            style="margin-left: 200px; width: 450px; height: 650px; background-color: #041433;
            background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%); border-radius: 20px;">
            <article style="margin-left: 25px; top: 25px;">
                <img src="images/mamani.jpg">
                <img src="images/hombree.png">
            </article><br><br>
            <br><a class="text-white" style="font-size: 20px;"><b>Becas Para Ti!!!</b></a><br><br>
            <div style="text-align: justify; margin-left: 20px; margin-right: 20px;">
                <a href="" class="man" style="margin: 0 auto; color: white; ">
                    <FONT>La beca "Jóvenes Bicentenario del Perú" es un programa
                        de apoyo financiero y académico dirigido
                        a jóvenes peruanos destacados que deseen cursar
                        estudios superiores. Busca brindar oportunidades
                        de educación a jóvenes talentosos y de bajos
                        recursos, formando líderes comprometidos con
                        el desarrollo del país.</FONT>
                </a>
            </div><br><br>
            <a href="https://mtpe.trabajo.gob.pe/becajovenesbicentenario/" class="max py-2 px-4"
                style="color: white;  "><b>
                    Ver mas <i class="fa-solid fa-angles-right"></i></b></a>
        </div>

        <div
            style="margin-left: 200px; width: 450px; height: 650px; background-color: #041433;
            background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%); border-radius: 20px;">
            <article style="margin-left: 25px; top: 25px;">
                <img src="images/marinera.jpg">
                <img src="images/mar.png">
            </article><br><br>
            <br><a class="text-white" style="font-size: 20px;"><b>Top Sunedu 2023!!!</b></a><br><br>
            <div style="text-align: justify; margin-left: 20px; margin-right: 20px;">
                <a href="" class="man" style="margin: 0 auto; color: white; ">
                    <FONT>La marinera, danza peruana, es una expresión de pasión y orgullo cultural. Sus movimientos
                        elegantes y
                        enérgicos capturan la esencia de la diversidad peruana. Una celebración de la riqueza artística
                        y
                        tradicional del país.</FONT>
                </a>
            </div><br><br>
            <a href="https://larepublica.pe/datos-lr/respuestas/2022/06/02/la-marinera-peruana-cual-es-el-origen-de-este-tradicional-baile-y-por-que-es-tan-popular-en-el-peru-y-el-mundo-danzas-tipicas-trujillo-evat"
                class="max py-2 px-4" style="color: white;  "><b>
                    Ver mas <i class="fa-solid fa-angles-right"></i></b></a>
        </div>
    </div>
    </div>

    <!--Inicio de footer-->


    </div>
    <br><br><br>

    <!--Foteer-->
    <div id="contacto">
        <div class="text-center  " style="width: full;">
            <!-- Footer -->
            <footer class=" text-center text-lg-start text-white "
                style="background-color: #041433;
        background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);">
                <div class="container p-4 pb-0 ml-48" style="height: 300px;"><br>
                    <div style="justify-content: space-around; display: flex;">
                        <div style="display: flex;">
                            <i class="fa-solid fa-phone-volume"
                                style="margin-top: 5px; width: 40px; height: 40px;"></i>
                            <div style="margin-left: 10px;">
                                <a>Número de Telefono:</a> <br>
                                <a>(01) 6186300</a>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <i class="fa-solid fa-envelope" style="margin-top: 5px; width: 40px; height: 40px;"></i>
                            <div style="margin-left: 10px; margin-top: 11px;">
                                <a style=" text-align: right;">Correro:</a>
                                <a>datospersonales@upeu.edu.pe</a>
                            </div>
                        </div>
                        <div style="display: flex; ">
                            <i class="fa-solid fa-house" style="margin-top: 5px; width: 40px; height: 40px;"></i>
                            <div style="margin-left: 10px; ">
                                <a>Dirección:</a> <br>
                                <a> Carretera Central Km 19.5 Ñaña, Chosica</a>
                            </div>
                        </div>

                    </div><br>
                    <hr />

                    <ul class="text-center" style="margin-left: 20%; margin-top: -25px; ">
                        <li>
                            <a class="facebook" href="https://www.facebook.com/UPeUOficial/?locale=es_LA">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter"
                                href="https://twitter.com/i/flow/login?redirect_after_login=%2Fupeuoficial">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="instagram" href="https://www.instagram.com/upeuoficial/?hl=es">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="google" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa-brands fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-center p-3 " style="font-size: 20px; background-color: rgba(0, 0, 0, 0.2) ">
                    © 2023 UPeU:
                    <a class="text-white" href="https://lamb-academic.upeu.edu.pe/">UPeU.com</a>
                </div>
            </footer>
        </div>


        <style>
            ul {
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                margin: 0;
                padding: 0;
                display: flex;
            }

            ul li {
                list-style: none;
            }

            ul li a {
                display: block;
                position: relative;
                width: 100px;
                height: 100px;
                line-height: 100px;
                font-size: 40px;
                text-align: center;
                text-decoration: none;
                color: #ffffff;
                margin: 0 30px;
                transition: 0.5s;
            }

            ul li a span {
                position: absolute;
                transition: transform 0.5s;
            }

            ul li a span:nth-child(1),
            ul li a span:nth-child(3) {
                width: 100%;
                height: 3px;
                background: #ffffff;
            }

            ul li a span:nth-child(1) {
                top: 0;
                left: 0;
                transform-origin: right;
            }

            ul li a:hover span:nth-child(1) {
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 0.5s;
            }

            ul li a span:nth-child(3) {
                bottom: 0;
                left: 0;
                transform-origin: left;
            }

            ul li a:hover span:nth-child(3) {
                transform: scaleX(0);
                transform-origin: right;
                transition: transform 0.5s;
            }

            ul li a span:nth-child(2),
            ul li a span:nth-child(4) {
                width: 3px;
                height: 100%;
                background: #404040;
            }

            ul li a span:nth-child(2) {
                top: 0;
                left: 0;
                transform: scale(0);
                transform-origin: bottom;
            }

            ul li a:hover span:nth-child(2) {
                transform: scale(1);
                transform-origin: top;
                transition: transform 0.5s;
            }

            ul li a span:nth-child(4) {
                top: 0;
                right: 0;
                transform: scale(0);
                transform-origin: top;
            }

            ul li a:hover span:nth-child(4) {
                transform: scale(1);
                transform-origin: bottom;
                transition: transform 0.5s;
            }

            .facebook:hover {
                color: #3b5998;
            }

            .facebook:hover span {
                background: #3b5998;
            }

            .twitter:hover {
                color: #1da1f2;
            }

            .twitter:hover span {
                background: #1da1f2;
            }

            .instagram:hover {
                color: #c32aa3;
            }

            .instagram:hover span {
                background: #c32aa3;
            }

            .google:hover {
                color: #dd4b39;
            }

            .google:hover span {
                background: #dd4b39;
            }

            ul li a .twitter {
                color: #1da1f2;
            }

            ul li a:hover:nth-child(3) {
                color: #c32aa3;
            }

            ul li a:hover:nth-child(4) {
                color: #dd4b39;
            }

            /* general */
            body {
                margin: 0;
                padding: 0;
                background: #000000;
            }
        </style>
    </div>
    <!--formulario-->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class=" fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="base">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="login-boxa" class="px-6 py-6 lg:px-8">
                    <form class="form" class="space-y-6" action="#">
                        <label style="color:white;  margin-left: 145px; font-size: 30px;" for="Titulo">Crear
                            Cuenta</label>
                        <div style="display: flex;">
                            <div class="user-boxa" style="width: 250px;">
                                <input type="text" name="nombres" id="nombres" required>
                                <label for="nombres">Nombres</label>
                            </div>
                            <div class="user-boxa" style="margin-left: 20px; width: 250px;">
                                <input type="text" name="apellidos" id="apellidos" required>
                                <label for="apellidos">Apellidos</label>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <div class="user-boxa" style="width: 250px;">
                                <input type="text" name="dni" id="dni" required>
                                <label for="dni">DNI</label>

                            </div>
                            <div class="user-boxa" style="margin-left: 20px; width: 250px;">
                                <input type="date" placeholder="Fecha de nacimiento" name="fecha"
                                    id="fecha" required>
                                <label for="fecha">Fecha de naciminento</label>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="user-boxa">
                            <div>
                                <input type="text" name="genero" id="generoInput" required @click="open=!open"
                                    type="button" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <label for="genero">Género</label>
                            </div>
                            <div x-show="open" @click.away="open=false"
                                style="padding: 90px 155px; margin-bottom: -100px; margin-top: -120px;"
                                class="crearr text-center" role="menu" aria-orientation="vertical"
                                aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="#" style="margin-bottom: -30px;" role="menuitem" tabindex="-1"
                                    id="user-menu-item-0"
                                    x-on:click="generoInput.value='Masculino'; open=false">Masculino</a>
                                <a href="#" style="margin-bottom: -30px;" role="menuitem" tabindex="-1"
                                    id="user-menu-item-1"
                                    x-on:click="generoInput.value='Femenino'; open=false">Femenino</a>
                                <a href="#" role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    x-on:click="generoInput.value='Otro'; open=false">Otro</a>
                            </div>
                        </div>
                        <div class="user-boxa">
                            <input type="email" name="email" id="email" required>
                            <label for="email">Correo Electronico</label>
                        </div>
                        <div class="user-boxa">
                            <input type="password" name="password" id="password" required>
                            <label for="password">Contraseña</label>
                        </div>
                        <a class="crearr btn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <button style="all: unset;">
                                Crear Cuenta</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>


<script>
    var fechaInput = document.getElementById('fecha');

    fechaInput.addEventListener('focus', function() {
        this.classList.add('active');
    });

    fechaInput.addEventListener('blur', function() {
        if (!this.value) {
            this.classList.remove('active');
        }
    });
</script>
<style>
    #fecha {
        color: transparent;
    }

    #fecha.active {
        color: white;
    }


    .login-boxa {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 550px;

        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }



    .login-boxa h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .base {
        background-color: transparent;
        background: rgba(0, 0, 0, .5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-boxa .user-boxa {
        position: relative;
    }

    .login-boxa .user-boxa input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-boxa .user-boxa label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-boxa .user-boxa input:focus~label,
    .login-boxa .user-boxa input:valid~label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-boxa form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-boxa a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 17px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

    .login-boxa a span {
        position: absolute;
        display: block;
    }

    .login-boxa a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .login-boxa a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .login-boxa a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .login-boxa a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }

    .login-boxa .crearr {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px;

    }


    .login-boxa .crear {
        color: #03e9f4;
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        margin-left: 15px;
        letter-spacing: 4px;
        margin-bottom: 80px;

    }

    .login-boxa .crear:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

    .login-boxa .crear span {
        position: absolute;
        display: block;
    }

    .login-boxa .crear span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }


    .login-boxa .crear span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }



    .login-boxa .crear span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }



    .login-boxa .crear span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }
</style>
<style>
    .max:hover {
        background-image: linear-gradient(332deg, #041433 21%, #507fc8 67%, #70fff7 100%);
        border-radius: 10px;
        transform: scale(0.9);

    }

    article {
        position: relative;
        width: 350px;
        transition: all .3 ease;
    }

    article img:first-child {
        box-shadow: 0 60px 60px -60px rgba(0, 30, 255, 0.5);
        border-radius: 4px;
        object-fit: cover;
        width: 100%;
    }

    article img:last-child {
        position: absolute;
        width: 350px;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        transform: translateY(25%);
        transition: .3s ease;
        opacity: 0;
    }

    article:hover {
        transform: perspective(250px) rotateX(10deg) translateY(-5%) translateZ(0);
    }

    article::before {

        position: absolute;
        bottom: 0;
        height: 100%;
        width: 100%;
        background-image: linear-gradient(to botton, transparent 10%, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0) 95%);
        opacity: 0;
        transition: all .3s ease;
    }

    article:hover::before {
        opacity: 1;
    }


    article:hover img:last-child {
        opacity: 1;
        transform: translateY(10%);
    }

    #botonx {
        margin-left: 100px;
        font-size: 22px;
        margin-top: 40px;
        color: white;
        background-color: #041433;
        background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);
        border-radius: 20px;
        transition: background-color 0.3s ease;
    }

    #basura {
        margin-left: 100px;
        font-size: 22px;
        margin-top: 40px;
        color: white;
        background-color: #041433;
        background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);
        border-radius: 20px;
        transition: background-color 0.3s ease;
    }

    #basura:hover {

        transform: scale(0.9);
        color: #fff;
        border-radius: 17px;
        background-color: #f5f5f5;
        box-shadow: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);


    }

    #botonx:hover {

        transform: scale(0.9);
        color: #fff;
        border-radius: 20px;
        background-image: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);
        color: #fff;
        border-radius: 17px;
        box-shadow: linear-gradient(45deg, #041433 21%, #507fc8 67%, #70fff7 100%);


    }


    nav {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #ffffff;
        z-index: 999;
    }

    .contenido {
        margin-top: 50px;
    }

    .login-box a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 17px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }
</style>
