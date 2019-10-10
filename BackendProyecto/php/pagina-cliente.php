<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../FrontedProyecto/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../FrontedProyecto/css/estilos.css">
    <link rel="stylesheet" href="../../FrontedProyecto/css/bootstrap.min.css">
    <title>Pagina cliente</title>
</head>

<body>
    <header>
        <nav class="navbar col-12 navbar-expand-lg navbar-dark">
            <img src="../../FrontedProyecto/img/logo.png" alt="" srcset="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto text-center cont-items-nav">
                    <div id="mostrarInicio" class="cont-items-nav-dv" style="margin-left: 10px;">
                        <div>
                            <i class="fas fa-home" style="color: black; font-size: 35px"></i>
                        </div>
                        <div class="">
                            <span class="">Inicio</span>
                        </div>
                    </div>
                    <div id="mostrarEmpresasFavoritas" class="cont-items-nav-dv">
                        <div>
                            <i class="fas fa-star" style="color: green; font-size: 35px"></i>
                        </div>
                        <div class="">
                            <span class="">Empresas Favoritas</span>
                        </div>
                    </div>
                    <div id="mostrarPromocionesFavoritas" class="cont-items-nav-dv">
                        <div>
                            <i class="fas fa-heart" style="color: red; font-size: 35px"></i>
                        </div>
                        <div>
                            <span class="">Promociones Favoritas</span>
                        </div>
                    </div>
                    <div id="mostrarPerfilesEmpresas" class="cont-items-nav-dv">
                        <div>
                            <img class="cl-img" src="../../FrontedProyecto/img/avatar-empresa.png" alt="">
                        </div>
                        <div>
                            <span class=""> Perfiles de Empresas</span>
                        </div>
                    </div>
                    <div id="mostrarConfiguracionPerfil" class="cont-items-nav-dv">
                        <div>
                            <img class="cl-img" src="../../FrontedProyecto/img/avatar.png" alt="">
                        </div>
                        <div>
                            <span>Enoc Rivera Morales</span>
                        </div>
                    </div>
                    <div data-target="#salir" data-toggle="modal" class="cont-items-nav-dv">
                        <div>
                            <i class="fas fa-sign-out-alt" style="font-size: 35px"></i>
                        </div>
                        <div>
                            <span>Salir</span>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </header>

    <div>
        <section id="inicio">
            <div class="contenido-visualizaciones col-lg-11 col-md-11 col-sm-12">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <input class="form-control" type="text" placeholder="Buscar una promoción...">
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <button type="button" class="btn btn-outline-success">Buscar</button>
                    </div>
                </div>
                <!-- Producto 1-->
                <div id="listarPromociones">

                </div>
                <!-- Producto 2-->

            </div>
        </section>

        <!-- Empresas Favoritas-->
        <section id="empresasFavoritas">
            <div class="contenido-visualizaciones col-lg-11 col-md-11 col-sm-12">
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <input class="form-control" type="text" placeholder="Buscar empresa favorita...">
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <button type="button" class="btn btn-outline-success">Buscar</button>
                    </div>
                </div>
                <!-- primer empresa favorita -->
                <div class="pro">
                    <!-- perfil de empresa  -->
                    <div class="row p-empre">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="logo-banner-empresa row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="log-empre">LOGO</div>
                                    <div class="img-log-empre">
                                        <img src="../../FrontedProyecto/img/logogoogle.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="ban-empre">BANNER</div>
                                    <div class="img-banner-empre">
                                        <img src="../../FrontedProyecto/img/logoamazon.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- datos de la empresa -->
                        <div class="container">
                            <div class="col-md-12 col-sm-12 tb-perfil-empre">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">NOMBRE DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">NOMBRE DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">CORREO DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">NOMBREEMPRESA@YAHOO.COM</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">NÚMERO DE TELÉFONO DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">9999999999999999999</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">PÁGINA WEB DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">EMPRESA.COM</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">FACEBOOK</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope"> FACEBOOK.COM/NOMBREEMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">TWITTER DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope"> @NOMBREEMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">PAÍS SUCURSAL PRINCIPAL</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">ESPAÑA</span>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">FECHA DE FUNDACIÓN</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">12/56/89</span>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="namePro">
                            <span class="promoAs">
                                PROMOCIONES ASOCIODAS
                            </span>
                        </div>
                        <div class="contariner pro">
                            <!-- sección de nombre de promocion 1 -->
                            <div class="namePro">NOMBRE DE LA PROMOCIÓN</div>
                            <div class="nameEmpre">NOMBRE DE LA EMPRESA</div>
                            <!-- seccion de imagen princial promo 1 -->
                            <div class="img-prin">
                                <div class="bimg">
                                    <img src="../../FrontedProyecto/img/prod7.jpg" alt="">
                                </div>
                            </div>
                            <!-- seccion de descripcion de promo 1 -->
                            <div class="des-prin">
                                <div class="titulo-descripcion"><span><i class="fas fa-list"></i> DESCRIPCIÓN</span>
                                </div>
                                <div class="parra">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa magnam sit,
                                        corporis nisi voluptatibus officiis aspernatur, iusto id molestias voluptate
                                        distinctio numquam molestiae, repellat enim doloribus! Cum alias
                                        veritatis id! Eaque aspernatur asperiores placeat nihil ab nisi sunt nulla ut
                                        architecto laboriosam
                                    </p>
                                </div>
                            </div>

                            <!--Seccion de Precios-->
                            <div class="cont-precio">
                                <div>
                                    <p>PRECIO REAL: LPS.220</p>
                                </div>
                                <div>
                                    <p>PRECIO OFERTA: LPS.220</p>
                                </div>
                                <div>
                                    <p>DESCUENTO: 29%</p>
                                </div>
                                <div>
                                    <p>FIN DE PROMOCIÓN: 17/08/2013</p>
                                </div>
                                <div data-toggle="modal" href="#login">
                                    <p><i class="fas fa-shopping-cart"></i> COMPRAR</p>
                                </div>
                            </div>

                            <div class="row">
                                <!-- boton de ver mas imagenes promo 1 -->
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                    <div class="mas-imagenes" data-toggle="modal" data-target="#mas-img-de-pro-2">
                                        <span><label>
                                                VER MAS IMAGENES
                                            </label> <span class="far fa-images"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de guardar promocion como favorita -->
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12" onclick="ccgpcf1()">
                                    <div class="mas-imagenes">
                                        <span>
                                            <span>
                                                <label>
                                                    <span id="" onclick="">GUARDAR PROMOCIÓN COMO FAVORITA</span>
                                                    <span style="color:white">
                                                        <span id="ccgpcf1" class="fas fa-heart"></span>
                                                    </span>
                                                    <input type="checkbox" name="" id="cpf1" style="display:none;">
                                                </label>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de guardar empresa como favorita promo 1 -->
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12" onclick="ccgecf1()">
                                    <div class="mas-imagenes">
                                        <span>
                                            <label>
                                                <span onclick="" id="DECF">DESMARCAR EMPRESA COMO FAVORITA</span>
                                                <span style="color: red">
                                                    <span id="favGecf1" class="fas fa-heart"></span>
                                                </span>
                                                <input type="checkbox" name="" id="cef1" style="display:none;">
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- boton de ver comentarios promo 1 -->
                                <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                    data-target="#ver-comentarios-pro-2">
                                    <div class="mas-imagenes">
                                        <span>
                                            COMENTARIOS <span class="fas fa-comments"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de evaluar promocion promo 1 -->
                                <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                    data-target="#evaluar-promocion">
                                    <div class="mas-imagenes">
                                        <span>
                                            EVALUAR PROMOCIÓN <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de ver la promocion en un mapa por google map -->
                                <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                    data-target="#promocion-mapa" onclick="verPromocionMapa()">
                                    <div class="mas-imagenes">
                                        <span>
                                            VER PROMOCIÓN EN MAPA <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Ventana modal de más IMAGENES PRO-2-->
                            <div class="modal fade" id="mas-img-de-pro-2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">MÁS IMAGENES <span class="far fa-images"></span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carousel-pro-2" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-pro-2" data-slide-to="0" class="active">
                                                    </li>
                                                    <li data-target="#carousel-pro-2" data-slide-to="1"></li>
                                                    <li data-target="#carousel-pro-2" data-slide-to="2"></li>
                                                    <li data-target="#carousel-pro-2" data-slide-to="3"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod2.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod3.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod4.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod4.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-pro-2" role="button"
                                                    data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-pro-2" role="button"
                                                    data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ventana modal de comentarios-->
                            <div class="modal fade" id="ver-comentarios-pro-2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">COMENTARIOS <span class="fas fa-comments"></span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-12 comentarios">
                                                <div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod10.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont">
                                                                <textarea name="" id=""
                                                                    placeholder="Comentar..."></textarea><br>
                                                                <button type="button"
                                                                    class="btn btn-outline-success m-x-10">Enviar
                                                                    comentario</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod1.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont-pri">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Eaque

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod2.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont-pri">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Eaque minus dicta fugit, iusto non nulla est
                                                                    velit, facilis alias impedit , officia velit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod6.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont-pri">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Eaque minus dicta fugit, iusto non nulla est
                                                                    velit, facilis alias res iste enim, officia velit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ventana modal de EvaluarPromoción-->
                            <div class="modal fade" id="evaluar-promocion" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">EVALUAR PROMOCIÓN <span class="fas fa-eye"></span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="evaPromo">
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva1()" id="es1" class="fas fa-star "
                                                        style="font-size: 55px;"></i>
                                                    <input class="ds-color" value="1" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva2()" id="es2" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="2" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva3()" id="es3" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="3" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva4()" id="es4" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="4" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva5()" id="es5" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="5" type="radio" name="evaluar-promo">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ventana modal de ver promoción en mapa por medio de ggogle map -->
                            <div class="modal fade" id="promocion-mapa" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div id="pro-mapa" class="maps">
                                        </div>
                                        <div class="modal-footer-maps">
                                            <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                                                Listo
                                                <i class="fas fa-window-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </section>

        <!-- Promociones Favoritas-->
        <section id="promocionesFavoritas">
            <div class="contenido-visualizaciones col-lg-11 col-md-11 col-sm-12">
                <!-- input y boton de buscar promocion favorita -->
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <input class="form-control" type="text" placeholder="Buscar promoción favorita...">
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <button type="button" class="btn btn-outline-success">Buscar</button>
                    </div>
                </div>
                <!-- promocion favorita 1 -->
                <div class="pro">
                    <!-- sección de nombre de promocion 1 -->
                    <div class="namePro">NOMBRE DE LA PROMOCIÓN</div>
                    <div class="nameEmpre">NOMBRE DE LA EMPRESA</div>
                    <!-- seccion de imagen princial promo 1 -->
                    <div class="img-prin">
                        <div class="bimg">
                            <img src="../../FrontedProyecto/img/prod4.jpg" alt="">
                        </div>
                    </div>
                    <!-- seccion de descripcion de promo 1 -->
                    <div class="des-prin">
                        <div class="titulo-descripcion"><span><i class="fas fa-list"></i> DESCRIPCIÓN</span>
                        </div>
                        <div class="parra">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa magnam sit, corporis nisi
                                voluptatibus officiis aspernatur, iusto id molestias voluptate distinctio numquam
                                molestiae, repellat enim doloribus! Cum alias veritatis
                                id! Eaque aspernatur asperiores placeat nihil ab nisi sunt nulla ut architecto
                                laboriosam
                            </p>
                        </div>
                    </div>

                    <!--Seccion de Precios-->
                    <div class="cont-precio">
                        <div>
                            <p>PRECIO REAL: LPS.220</p>
                        </div>
                        <div>
                            <p>PRECIO OFERTA: LPS.220</p>
                        </div>
                        <div>
                            <p>DESCUENTO: 29%</p>
                        </div>
                        <div>
                            <p>FIN DE PROMOCIÓN: 17/08/2013</p>
                        </div>
                        <div data-toggle="modal" href="#login">
                            <p><i class="fas fa-shopping-cart"></i> COMPRAR</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- boton de ver mas imagenes promo 1 -->
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="mas-imagenes" data-toggle="modal" data-target="#mas-img-de-pro-2">
                                <span><label>
                                        VER MAS IMAGENES
                                    </label> <span class="far fa-images"></span>
                                </span>
                            </div>
                        </div>
                        <!-- boton de guardar promocion como favorita -->
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="mas-imagenes">
                                <span>
                                    <span>
                                        <label>
                                            <span onclick="bccgpcf()" id="DPCF">DESMARCAR PROMOCIÓN COMO FAVORITA</span>
                                            <span style="color:red">
                                                <span id="bccgpcf" class="fas fa-heart"></span>
                                            </span>
                                            <input type="checkbox" name="" id="bcpf" style="display:none;">
                                        </label>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <!-- boton de guardar empresa como favorita promo 1 -->
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="mas-imagenes">
                                <span>
                                    <label>
                                        <span onclick="bccgecf()" id="DECF">DESMARCAR EMPRESA COMO FAVORITA</span>
                                        <span style="color: red">
                                            <span id="bfavGecf" class="fas fa-heart"></span>
                                        </span>
                                        <input type="checkbox" name="" id="bcef" style="display:none;">
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- boton de ver comentarios promo 1 -->
                        <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                            data-target="#ver-comentarios-pro-2">
                            <div class="mas-imagenes">
                                <span>
                                    COMENTARIOS <span class="fas fa-comments"></span>
                                </span>
                            </div>
                        </div>
                        <!-- boton de evaluar promocion promo 1 -->
                        <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal" data-target="#evaluar-promocion">
                            <div class="mas-imagenes">
                                <span>
                                    EVALUAR PROMOCIÓN <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <!-- boton de ver la promocion en un mapa por google map -->
                        <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal" data-target="#promocion-mapa"
                            onclick="verPromocionMapa()">
                            <div class="mas-imagenes">
                                <span>
                                    VER PROMOCIÓN EN MAPA <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Ventana modal de más IMAGENES PRO-2-->
                    <div class="modal fade" id="mas-img-de-pro-2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">MÁS IMAGENES <span class="far fa-images"></span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="carousel-pro-2" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-pro-2" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carousel-pro-2" data-slide-to="1"></li>
                                            <li data-target="#carousel-pro-2" data-slide-to="2"></li>
                                            <li data-target="#carousel-pro-2" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-intervall="5000">
                                                <img src="../../FrontedProyecto/img/prod1.jpg" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item" data-intervall="5000">
                                                <img src="../../FrontedProyecto/img/prod2.jpg" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item" data-intervall="5000">
                                                <img src="../../FrontedProyecto/img/prod3.jpg" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                            <div class="carousel-item" data-intervall="5000">
                                                <img src="../../FrontedProyecto/img/prod4.jpg" class="d-block w-100"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-pro-2" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-pro-2" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">CERRAR <i
                                            class="fas fa-window-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ventana modal de comentarios-->
                    <div class="modal fade" id="ver-comentarios-pro-2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">COMENTARIOS <span class="fas fa-comments"></span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-12 comentarios">
                                        <div>
                                            <div class="comenta">
                                                <div>
                                                    <img src="../../FrontedProyecto/img/prod10.jpg">
                                                </div>
                                                <div class="conte-coment">
                                                    <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                    </div>
                                                    <div class="conte-coment-div-cont">
                                                        <textarea name="" id=""
                                                            placeholder="Comentar..."></textarea><br>
                                                        <button type="button"
                                                            class="btn btn-outline-success m-x-10">Enviar
                                                            comentario</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comenta">
                                                <div>
                                                    <img src="../../FrontedProyecto/img/prod1.jpg">
                                                </div>
                                                <div class="conte-coment">
                                                    <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                    </div>
                                                    <div class="conte-coment-div-cont-pri">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Eaque

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comenta">
                                                <div>
                                                    <img src="../../FrontedProyecto/img/prod2.jpg">
                                                </div>
                                                <div class="conte-coment">
                                                    <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                    </div>
                                                    <div class="conte-coment-div-cont-pri">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Eaque minus dicta fugit, iusto non nulla est velit, facilis
                                                            alias impedit , officia velit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comenta">
                                                <div>
                                                    <img src="../../FrontedProyecto/img/prod6.jpg">
                                                </div>
                                                <div class="conte-coment">
                                                    <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                    </div>
                                                    <div class="conte-coment-div-cont-pri">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Eaque minus dicta fugit, iusto non nulla est velit, facilis
                                                            alias res iste enim, officia velit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">CERRAR <i
                                            class="fas fa-window-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ventana modal de EvaluarPromoción-->
                    <div class="modal fade" id="evaluar-promocion" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">EVALUAR PROMOCIÓN <span class="fas fa-eye"></span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="evaPromo">
                                        <label style="color:white">
                                            <i onclick="cambioColorEva1()" id="es1" class="fas fa-star "
                                                style="font-size: 55px;"></i>
                                            <input class="ds-color" value="1" type="radio" name="evaluar-promo">
                                        </label>
                                        <label style="color:white">
                                            <i onclick="cambioColorEva2()" id="es2" class="fas fa-star"
                                                style="font-size: 55px; "></i>
                                            <input class="ds-color" value="2" type="radio" name="evaluar-promo">
                                        </label>
                                        <label style="color:white">
                                            <i onclick="cambioColorEva3()" id="es3" class="fas fa-star"
                                                style="font-size: 55px; "></i>
                                            <input class="ds-color" value="3" type="radio" name="evaluar-promo">
                                        </label>
                                        <label style="color:white">
                                            <i onclick="cambioColorEva4()" id="es4" class="fas fa-star"
                                                style="font-size: 55px; "></i>
                                            <input class="ds-color" value="4" type="radio" name="evaluar-promo">
                                        </label>
                                        <label style="color:white">
                                            <i onclick="cambioColorEva5()" id="es5" class="fas fa-star"
                                                style="font-size: 55px; "></i>
                                            <input class="ds-color" value="5" type="radio" name="evaluar-promo">
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">CERRAR <i
                                            class="fas fa-window-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ventana modal de ver promoción en mapa por medio de ggogle map -->
                    <div class="modal fade" id="promocion-mapa" tabindex="-1" role="dialog"
                        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div id="pro-mapa" class="maps">
                                </div>
                                <div class="modal-footer-maps">
                                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                                        Listo
                                        <i class="fas fa-window-close"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- promocion favorita 2 -->

        </section>

        <!-- Perfiles de Empresas-->
        <section id="perfilesEmpresas">
            <div class="contenido-visualizaciones col-lg-11 col-md-11 col-sm-12">
                <!-- input y boton de buscar perfil de empresa -->
                <div class="container  row">
                    <div class="col-md-10 col-sm-12">
                        <input class="form-control" type="text" placeholder="Buscar un perfil de empresa...">
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <button type="button" class="btn btn-outline-success">Buscar</button>
                    </div>
                </div>
                <!-- perfil empresa 1 -->
                <div class="pro">
                    <!-- perfil de empresa  -->
                    <div class="row p-empre">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="logo-banner-empresa row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="log-empre">LOGO</div>
                                    <div class="img-log-empre">
                                        <img src="../../FrontedProyecto/img/logogoogle.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="ban-empre">BANNER</div>
                                    <div class="img-banner-empre">
                                        <img src="../../FrontedProyecto/img/logoamazon.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- datos de la empresa -->
                        <div class="container">
                            <div class="col-md-12 col-sm-12 tb-perfil-empre">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">NOMBRE DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">NOMBRE DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">CORREO DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">NOMBREEMPRESA@YAHOO.COM</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">NÚMERO DE TELÉFONO DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">9999999999999999999</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">PÁGINA WEB DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">EMPRESA.COM</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">FACEBOOK</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope"> FACEBOOK.COM/NOMBREEMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">TWITTER DE LA EMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope"> @NOMBREEMPRESA</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">PAÍS SUCURSAL PRINCIPAL</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">ESPAÑA</span>
                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="datope">FECHA DE FUNDACIÓN</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <hr>
                                        <span class="redatope">12/56/89</span>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="namePro">
                            <span class="promoAs">
                                PROMOCIONES ASOCIODAS
                            </span>
                        </div>
                        <div class="contariner pro">
                            <!-- sección de nombre de promocion 1 -->
                            <div class="namePro">NOMBRE DE LA PROMOCIÓN</div>
                            <div class="nameEmpre">NOMBRE DE LA EMPRESA</div>
                            <!-- seccion de imagen princial promo 1 -->
                            <div class="img-prin">
                                <div class="bimg">
                                    <img src="../../FrontedProyecto/img/prod7.jpg" alt="">
                                </div>
                            </div>
                            <!-- seccion de descripcion de promo 1 -->
                            <div class="des-prin">
                                <div class="titulo-descripcion"><span><i class="fas fa-list"></i> DESCRIPCIÓN</span>
                                </div>
                                <div class="parra">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa magnam sit,
                                        corporis nisi voluptatibus officiis aspernatur, iusto id molestias voluptate
                                        distinctio numquam molestiae, repellat enim doloribus! Cum alias
                                        veritatis id! Eaque aspernatur asperiores placeat nihil ab nisi sunt nulla ut
                                        architecto laboriosam
                                    </p>
                                </div>
                            </div>

                            <!--Seccion de Precios-->
                            <div class="cont-precio">
                                <div>
                                    <p>PRECIO REAL: LPS.220</p>
                                </div>
                                <div>
                                    <p>PRECIO OFERTA: LPS.220</p>
                                </div>
                                <div>
                                    <p>DESCUENTO: 29%</p>
                                </div>
                                <div>
                                    <p>FIN DE PROMOCIÓN: 17/08/2013</p>
                                </div>
                                <div data-toggle="modal" href="#login">
                                    <p><i class="fas fa-shopping-cart"></i> COMPRAR</p>
                                </div>
                            </div>

                            <div class="row">
                                <!-- boton de ver mas imagenes promo 1 -->
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                    <div class="mas-imagenes" data-toggle="modal" data-target="#mas-img-de-pro-2">
                                        <span><label>
                                                VER MAS IMAGENES
                                            </label> <span class="far fa-images"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de guardar promocion como favorita -->
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12" onclick="ccgpcf1()">
                                    <div class="mas-imagenes">
                                        <span>
                                            <span>
                                                <label>
                                                    GUARDAR PROMOCIÓN COMO FAVORITA
                                                    <span style="color:white">
                                                        <span id="ccgpcf1" class="fas fa-heart"></span>
                                                    </span>
                                                    <input type="checkbox" name="" id="cpf1" style="display:none;">
                                                </label>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de guardar empresa como favorita promo 1 -->
                                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12" onclick="ccgecf1()">
                                    <div class="mas-imagenes">
                                        <span>
                                            <label>
                                                GUARDAR EMPRESA COMO FAVORITA
                                                <span style="color: white">
                                                    <span id="favGecf1" class="fas fa-heart"></span>
                                                </span>
                                                <input type="checkbox" name="" id="cef1" style="display:none;">
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- boton de ver comentarios promo 1 -->
                                <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                    data-target="#ver-comentarios-pro-2">
                                    <div class="mas-imagenes">
                                        <span>
                                            COMENTARIOS <span class="fas fa-comments"></span>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de evaluar promocion promo 1 -->
                                <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                    data-target="#evaluar-promocion">
                                    <div class="mas-imagenes">
                                        <span>
                                            EVALUAR PROMOCIÓN <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <!-- boton de ver la promocion en un mapa por google map -->
                                <div class="col-lg-4 col-md-4 col-sm-12" data-toggle="modal"
                                    data-target="#promocion-mapa" onclick="verPromocionMapa()">
                                    <div class="mas-imagenes">
                                        <span>
                                            VER PROMOCIÓN EN MAPA <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Ventana modal de más IMAGENES PRO-2-->
                            <div class="modal fade" id="mas-img-de-pro-2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">MÁS IMAGENES <span class="far fa-images"></span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carousel-pro-2" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-pro-2" data-slide-to="0" class="active">
                                                    </li>
                                                    <li data-target="#carousel-pro-2" data-slide-to="1"></li>
                                                    <li data-target="#carousel-pro-2" data-slide-to="2"></li>
                                                    <li data-target="#carousel-pro-2" data-slide-to="3"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod1.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod2.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod3.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item" data-intervall="5000">
                                                        <img src="../../FrontedProyecto/img/prod4.jpg"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-pro-2" role="button"
                                                    data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-pro-2" role="button"
                                                    data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ventana modal de comentarios-->
                            <div class="modal fade" id="ver-comentarios-pro-2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">COMENTARIOS <span class="fas fa-comments"></span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-12 comentarios">
                                                <div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod10.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont">
                                                                <textarea name="" id=""
                                                                    placeholder="Comentar..."></textarea><br>
                                                                <button type="button"
                                                                    class="btn btn-outline-success m-x-10">Enviar
                                                                    comentario</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod1.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont-pri">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Eaque

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod2.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont-pri">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Eaque minus dicta fugit, iusto non nulla est
                                                                    velit, facilis alias impedit , officia velit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comenta">
                                                        <div>
                                                            <img src="../../FrontedProyecto/img/prod6.jpg">
                                                        </div>
                                                        <div class="conte-coment">
                                                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span>
                                                            </div>
                                                            <div class="conte-coment-div-cont-pri">
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Eaque minus dicta fugit, iusto non nulla est
                                                                    velit, facilis alias res iste enim, officia velit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ventana modal de EvaluarPromoción-->
                            <div class="modal fade" id="evaluar-promocion" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">EVALUAR PROMOCIÓN <span class="fas fa-eye"></span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="evaPromo">
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva1()" id="es1" class="fas fa-star "
                                                        style="font-size: 55px;"></i>
                                                    <input class="ds-color" value="1" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva2()" id="es2" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="2" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva3()" id="es3" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="3" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva4()" id="es4" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="4" type="radio" name="evaluar-promo">
                                                </label>
                                                <label style="color:white">
                                                    <i onclick="cambioColorEva5()" id="es5" class="fas fa-star"
                                                        style="font-size: 55px; "></i>
                                                    <input class="ds-color" value="5" type="radio" name="evaluar-promo">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-dismiss="modal">CERRAR <i class="fas fa-window-close"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ventana modal de ver promoción en mapa por medio de ggogle map -->
                            <div class="modal fade" id="promocion-mapa" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div id="pro-mapa" class="maps">
                                        </div>
                                        <div class="modal-footer-maps">
                                            <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                                                Listo
                                                <i class="fas fa-window-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- perfil empresa 2 -->

            </div>

        </section>
        <!-- Configuacion del perfil-->
        <section id="configuracion">
            <div class="contenido-visualizaciones col-lg-11 col-md-11 col-sm-12">
                <div class="pro text-center">
                    <div class="row">
                        <div class="col-8 tit-perfil">
                            <span>PERFIL</span>
                        </div>
                    </div>
                    <div class="col-8" style="margin: 0 auto;">
                        <div class="row instrucciones">
                            <div class="col-10 ins">
                                <p>Edite sus datos, dando click sobre el dato que desea cambiar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 tit-nombre-usuario">
                            <input type="text" value="Enoc Rivera Morales" placeholder="Nombre de de usuario">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 perfilImg">
                            <img src="../../FrontedProyecto/img/ani2.jpg" alt="">
                        </div>
                        <div class="col-10 actualizarFoto">
                            <input type="file" name="" id="">
                        </div>
                    </div>
                    <div class="col-10 datosPerfil">

                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                <span>DATOS DE LA PERSONA</span>
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" placeholder="respuesta de los datos de la persona">
                            </div>
                        </div>
                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                <span>DATOS DE LA PERSONA</span>
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" placeholder="respuesta de los datos de la persona">
                            </div>
                        </div>
                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                DATOS DE LA PERSONA
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" placeholder="respuesta de los datos de la persona">
                            </div>
                        </div>
                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                DATOS DE LA PERSONA
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" placeholder="respuesta de los datos de la persona">
                            </div>
                        </div>
                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                DATOS DE LA PERSONA
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" placeholder="respuesta de los datos de la persona">
                            </div>
                        </div>
                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                DATOS DE LA PERSONA
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" placeholder="respuesta de los datos de la persona">
                            </div>
                        </div>
                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                DATOS DE LA PERSONA
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" placeholder="respuesta de los datos de la persona">
                            </div>
                        </div>
                        <div class="row perfilUsuario">
                            <div class="col-md-6 col-sm-12 datoDefault">
                                DATOS DE LA PERSONA
                            </div>
                            <div class="col-md-6 col-sm-12 datoEdit">
                                <input type="text" value="23/45/2027" placeholder="Fecha de nacimiento">
                            </div>
                        </div>
                        <div class="row botGuardar">
                            <div class="col-12 ">
                                <button>Guardar nuevos datos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- modal de verificación de cerrar seccion -->
        <div class="modal fade" id="salir" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="tit-salir">
                            <span class="fas fa-sign-out-alt"></span>
                        </div>
                        <div class="versalir">
                            <span>¿DE VERDAD QUIERES SALIR?</span>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-dismiss="modal">NO</button>
                        <button type="button" class="btn btn-outline-success">SI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <footer>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </footer>
    </div>
    <script src="../../FrontedProyecto/js/all.min.js"></script>
    <script src="../../FrontedProyecto/js/jquery-3.4.1.min.js"></script>
    <script src="../../FrontedProyecto/js/bootstrap.min.js"></script>
    <script src="../../FrontedProyecto/js/controlador-pagina-cliente.js"></script>
    <script src="../../FrontedProyecto/js/popper.min.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVpSG9deuH1X--CBJSoX4631V7ppiEflQ&callback=setMapa">
    </script>
</body>

</html>