<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../FrontedProyecto/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../FrontedProyecto/css/estilos.css">
    <link rel="stylesheet" href="../../FrontedProyecto/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../FrontedProyecto/css/morris.css">
    <title>Pagina Empresa</title>
</head>

<body>
    <i class="fas fa-spinner"></i>
    <header>
        <nav class="navbar col-12 navbar-expand-lg navbar-dark">
            <img src="../../FrontedProyecto/img/logoamazon.jpg" alt="" srcset="">
            <a class="navbar-brand">AMAZON</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            REGISTROS <i class="fas fa-plus-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#registro-producto" data-toggle="modal"><i
                                    class="fas fa-plus"></i>
                                PRODUCTOS</a>
                            <a class="dropdown-item" href="#registro-sucursal" data-toggle="modal"><i
                                    class="fas fa-home"></i>
                                SUCURSALES</a>
                            <a class="dropdown-item" href="#registro-promocion" data-toggle="modal"><i
                                    class="fas fa-percent"></i> PROMOCIONES</a>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="#fichaPromocional" data-toggle="modal"><i class="fas fa-users"></i>
                            CREAR FICHA
                            PROMOCIONAL </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#ver-perfil" data-toggle="modal"> VER PERFIL <i
                                class="fas fa-users"></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#actualizar-perfil" data-toggle="modal"><i
                                class="fas fa-user-edit"></i> ACTUALIZAR
                            PERFIL </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#salir" data-toggle="modal"><i class="fas fa-sign-out-alt"></i> SALIR
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="contenido-visualizaciones col-lg-11 col-md-11 col-sm-12">

        <div class="pro">
            <div class="tit-graf">
                <h1>GRÁFICO DE VENTAS POR DÍA</h1>
            </div>
            <div id="grafico-venta-por-dia"></div>
            <div class="tit-graf">
                <h1>GRÁFICO SEGUIDORES POR MES</h1>
            </div>
            <div id="grafico-seguidores"></div>
            <div class="tit-graf">
                <h1>ULTIMOS COMENTARIOS</h1>
            </div>
            <div class="row emp-coment">
                <div class="col-md-4 col-sm-12 emp-img-tot">
                    <div class="log-empre">Nombre de la promoción</div>
                    <div class="img-log-empre">
                        <img src="../../FrontedProyecto/img/ani2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 emp-co">
                    <div class="comenta">
                        <div>
                            <img src="../../FrontedProyecto/img/prod1.jpg">
                        </div>
                        <div class="conte-coment">
                            <div class="conte-coment-div-name"><span>ENOC RIVERA</span></div>
                            <div class="conte-coment-div-cont-pri">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    <!-- Ventana Modales -->
    <!-- ventana modal de registro de productos -->
    <div class="modal fade" id="registro-producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-signature"></i> REGISTRO
                        PRODUCTO
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="contenedor-de-modal-body">
                        <div class="col-12 avatar-login">
                            <img src="../../FrontedProyecto/img/logoamazon.jpg" alt="" srcset="">
                        </div>
                        <form id="formulario-usuario">
                            <!-- nombre del producto -->
                            <div class="form-group-reg">
                                <i class="fas fa-file-signature emoji-form-registro-usuario"></i>
                                <input id="nombreProducto" autocomplete="off" type="text" class="form-control-reg"
                                    minlength="4" maxlength="40" placeholder="Nombre Producto">

                                <p id="listo-nombreProducto" class="listo ds-color">Listo <i
                                        class="fas fa-thumbs-up"></i></p>
                                <p id="no-listo-nombreProducto" class="no-listo ds-color">No esta listo <i
                                        class="fas fa-thumbs-down"></i></p>
                            </div>
                            <!-- código del producto -->
                            <div class="form-group-reg">
                                <i class="fas fa-sort-numeric-up-alt emoji-form-registro-usuario"></i>
                                <input id="codigoProducto" autocomplete="off" type="number" class="form-control-reg"
                                    placeholder="Código del producto">
                                <p id="listo-codigoProducto" class="listo ds-color">Listo <i
                                        class="fas fa-thumbs-up"></i></p>
                                <p id="no-listo-codigoProducto" class="no-listo ds-color">No esta listo <i
                                        class="fas fa-thumbs-down"></i></p>
                            </div>
                            <!-- precio del producto -->
                            <div class="form-group-reg">
                                <i class="fas fa-dollar-sign emoji-form-registro-usuario"></i>
                                <input id="precioProducto" autocomplete="off" maxlength="30" minlength="4" type="number"
                                    class="form-control-reg" placeholder="Precio del producto en Lps.">
                                <p id="listo-precioProducto" class="listo ds-color">Listo <i
                                        class="fas fa-thumbs-up"></i>
                                </p>
                                <p id="no-listo-precioProducto" class="no-listo ds-color">No esta listo <i
                                        class="fas fa-thumbs-down"></i></p>
                            </div>
                            <!-- descripción del roducto -->
                            <div class="form-group-reg">
                                <textarea id="nombreProducto" class="des-form-pro"
                                    placeholder="Descripción del producto..."></textarea>

                                <p id="listo-nombreProducto" class="listo ds-color">Listo <i
                                        class="fas fa-thumbs-up"></i></p>
                                <p id="no-listo-nombreProducto" class="no-listo ds-color">No esta listo <i
                                        class="fas fa-thumbs-down"></i></p>
                            </div>
                            <!-- fecha de eleboración del producto -->
                            <div class="form-control-reg" style="margin-top: 20px">
                                <div>
                                    <i class="fas fa-calendar-alt  emoji-form-registro-usuario"
                                        style="margin-top: 0px"></i>
                                </div>
                                <div style="display: flex; margin-left: 45px;">
                                    <div>
                                        <span>Elaboración: </span>
                                    </div>
                                    <div class="inp-date">
                                        <input id="fechaElaboracion" type="date">
                                    </div>

                                </div>
                            </div>
                            <p id="listo-fechaElaboracion" class="fechaElaboracion-listo ds-color">Listo <i
                                    class="fas fa-thumbs-up"></i></p>
                            <p id="no-listo-fechaElaboracion" class="fechaElaboracion-no-listo ds-color">No esta listo
                                <i class="fas fa-thumbs-down"></i></p>
                            <!-- fecha de vencimiento -->
                            <div class="form-control-reg" style="margin-top: 20px">
                                <div>
                                    <i class="fas fa-calendar-alt  emoji-form-registro-usuario"
                                        style="margin-top: 0px"></i>
                                </div>
                                <div style="display: flex; margin-left: 45px;">
                                    <div>
                                        <span>Vencimiento: </span>
                                    </div>
                                    <div class="inp-date">
                                        <input id="fechaVencimiento" type="date">
                                    </div>

                                </div>
                            </div>
                            <p id="listo-fechaVencimiento" class="nacimiento-listo ds-color">Listo <i
                                    class="fas fa-thumbs-up"></i></p>
                            <p id="no-listo-fechaVencimiento" class="nacimiento-no-listo ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>
                            <!-- Sucursales en donde se encuentra el producto -->
                            <div class="idicaciones-sucursales">
                                <span>Indique las sucursales en la que esta disponible el producto para la venta.</span>
                            </div>
                            <div id="sucursales">
                                <div class="form-control-reg" style="margin-top: 4px">
                                    <input type="checkbox" name="" id=""> <span>SUCURSAL 1</span>
                                </div>
                                <div class="form-control-reg" style="margin-top: 4px">
                                    <input type="checkbox" name="" id=""> <span>SUCURSAL 1</span>
                                </div>
                                <div class="form-control-reg" style="margin-top: 4px">
                                    <input type="checkbox" name="" id=""> <span>SUCURSAL 1</span>
                                </div>
                                <div class="form-control-reg" style="margin-top: 4px">
                                    <input type="checkbox" name="" id=""> <span>SUCURSAL 1</span>
                                </div>
                                <div class="form-control-reg" style="margin-top: 4px">
                                    <input type="checkbox" name="" id=""> <span>SUCURSAL 1</span>
                                </div>
                            </div>
                            <p id="listo-sucursal" class="sucursal-listo ds-color">Listo <i
                                    class="fas fa-thumbs-up"></i></p>
                            <p id="no-listo-sucursal" class="sucursal-no-listo ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>
                            <!-- indicaciones de imagenes del producto -->
                            <div class="idicaciones-sucursales">
                                <span>Fotos del producto.</span>
                            </div>
                            <!-- imagen de frente -->
                            <div class="form-control " style="margin-top: 4px;">
                                <div>
                                    <i class="fas fa-image  emoji-form-registro-usuario" style="margin-top: 0px"></i>
                                </div>
                                <div style="display:flex; margin-left: 45px;">
                                    <div>
                                        <span>Foto: </span>
                                    </div>
                                    <div class="inp-file">
                                        <p class="subir-foto">Frente</p>
                                        <input type="file" name="" id="bannerEmpresa"
                                            onchange="validarMostrarInputDeBanner()">
                                    </div>
                                </div>
                            </div>
                            <div class="vi-img ds-img" style="margin-top: 2px;" id="visor-frente" width="100%"></div>
                            <p id="listo-bannerEmpresa" class="listoe ds-color">Listo <i class="fas fa-thumbs-up"></i>
                            </p>
                            <p id="no-listo-bannerEmpresa" class="no-listoe ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>

                            <!-- imagen de costado izquierdo -->
                            <div class="form-control " style="margin-top: 6px;">
                                <div>
                                    <i class="fas fa-images  emoji-form-registro-usuario" style="margin-top: 0px"></i>
                                </div>
                                <div style="display: flex; margin-left: 45px;">
                                    <div>
                                        <span>Foto: </span>
                                    </div>
                                    <div class="inp-file">
                                        <p class="subir-foto">Izquierda</p>
                                        <input type="file" name="" id="logoEmpresa"
                                            onchange="validarMostrarInputDeLogo()">
                                    </div>
                                </div>
                            </div>
                            <div class="vi-img ds-img" style="margin-top: 2px;" id="visor-izquierda"></div>
                            <p id="listo-logoEmpresa" class="listoe ds-color">Listo <i class="fas fa-thumbs-up"></i>
                            </p>
                            <p id="no-listo-logoEmpresa" class="no-listoe ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>
                            <!-- imgen de costado derecho -->
                            <div class="form-control " style="margin-top: 6px;">
                                <div>
                                    <i class="far fa-images  emoji-form-registro-usuario" style="margin-top: 0px"></i>
                                </div>
                                <div style="display: flex; margin-left: 45px;">
                                    <div>
                                        <span>Foto: </span>
                                    </div>
                                    <div class="inp-file">
                                        <p class="subir-foto">Derecha</p>
                                        <input type="file" name="" id="logoEmpresa"
                                            onchange="validarMostrarInputDeLogo()">
                                    </div>
                                </div>
                            </div>
                            <div class="vi-img ds-img" style="margin-top: 2px;" id="visor-derecha"></div>
                            <p id="listo-logoEmpresa" class="listoe ds-color">Listo <i class="fas fa-thumbs-up"></i>
                            </p>
                            <p id="no-listo-logoEmpresa" class="no-listoe ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>
                            <!-- imagen de atras -->
                            <div class="form-control " style="margin-top: 4px;">
                                <div>
                                    <i class="far fa-image  emoji-form-registro-usuario" style="margin-top: 0px"></i>
                                </div>
                                <div style="display:flex; margin-left: 45px;">
                                    <div>
                                        <span>Foto: </span>
                                    </div>
                                    <div class="inp-file">
                                        <p class="subir-foto">Atrás</p>
                                        <input type="file" name="" id="bannerEmpresa"
                                            onchange="validarMostrarInputDeBanner()">
                                    </div>
                                </div>
                            </div>
                            <div class="vi-img ds-img" style="margin-top: 2px;" id="visor-atras" width="100%"></div>
                            <p id="listo-bannerEmpresa" class="listoe ds-color">Listo <i class="fas fa-thumbs-up"></i>
                            </p>
                            <p id="no-listo-bannerEmpresa" class="no-listoe ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>
                            <!-- botón de registrar SUCURSAL -->
                            <button type="button" onclick="reseFre()" class="btn btn-outline-success bs-i-login"
                                data-dismiss="modal" data-toggle="modal" data-target="#registro-sucursal">
                                REGISTRAR SUCURSAL
                                <i class="fas fa-plus-circle"></i>
                            </button>
                            <!-- botón de enviar el registro del producto -->
                            <button type="button" onclick="registrarUsuario()"
                                class="btn btn-outline-success bs-i-login">
                                ENVIAR
                                <i class="fas fa-share-square"></i>
                            </button>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                        CERRAR
                        <i class="fas fa-window-close"></i>
                    </button>


                </div>
            </div>
        </div>
    </div>

    <!-- venta modal de registo de sucursales -->
    <div class="modal fade" id="registro-sucursal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-home"></i> REGISTRO SUCURSAL
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="contenedor-de-modal-body">
                        <div class="col-12 avatar-login">
                            <img src="../../FrontedProyecto/img/logoamazon.jpg" alt="" srcset="">
                        </div>
                        <form action="" method="" id="formulario-empresa">
                            <!-- nombre de la sucursal -->
                            <div class="form-group-reg">
                                <i class="fas fa-users  emoji-form-registro-usuario"></i>
                                <input id="nombreSucursal" autocomplete="off" type="text" class="form-control "
                                    placeholder="Nombre de la sucursal">
                                <p id="listo-nombreSucursal" class="listo ds-color">Listo <i
                                        class="fas fa-thumbs-up"></i></p>
                                <p id="no-listo-nombreSucursal" class="no-listo ds-color">No esta listo <i
                                        class="fas fa-thumbs-down"></i></p>
                            </div>
                            <!-- codigo de la sucursal -->
                            <div class="form-group-reg">
                                <i class="far fa-id-card  emoji-form-registro-usuario"></i>
                                <input id="codigoSucursal" autocomplete="off" type="text" class="form-control "
                                    placeholder="Código Sucursal">
                                <p id="listo-codigoSucursal" class="listo ds-color">Listo <i
                                        class="fas fa-thumbs-up"></i>
                                </p>
                                <p id="no-listo-codigoSucursal" class="no-listo ds-color">No esta listo <i
                                        class="fas fa-thumbs-down"></i></p>
                            </div>
                            <!-- telefono de la sucursal -->
                            <div class="form-group-reg">
                                <i class="fas fa-mobile-alt  emoji-form-registro-usuario"></i>
                                <input id="telefonoSucursal" autocomplete="off" type="number" class="form-control "
                                    placeholder="Número de teléfono">
                                <p id="listo-telefonoSucursal" class="listo ds-color">Listo <i
                                        class="fas fa-thumbs-up"></i></p>
                                <p id="no-listo-telefonoSucursal" class="no-listo ds-color">No esta listo <i
                                        class="fas fa-thumbs-down"></i></p>
                            </div>


                            <!-- longitud y latitud de la sucursal -->
                            <button type="button" onclick="seleccionarLgLt()" class="selecionar-ubicación"
                                data-toggle="modal" data-target="#"><strong>Seleccione
                                    <!-- OJO funcion de la ventana modal-->
                                    longitud/latitud</strong></button>
                            <div id="ubicacionSucursal">
                                <div class="form-group-reg">
                                    <i class="fas fa-globe  emoji-form-registro-usuario"></i>
                                    <input id="longitudSucursal" value=" " disabled type="text" class="form-control "
                                        placeholder="Longitud">
                                    <p id="listo-longitudSucursal" class="listo ds-color">Listo <i
                                            class="fas fa-thumbs-up"></i></p>
                                    <p id="no-listo-longitudSucursal" class="no-listo ds-color">No esta listo <i
                                            class="fas fa-thumbs-down"></i></p>
                                </div>
                                <div class="form-group-reg">
                                    <i class="fas fa-globe  emoji-form-registro-usuario"></i>
                                    <input id="latitudSucursal" value=" " disabled type="text" class="form-control "
                                        placeholder="Latitud">
                                    <p id="listo-latitudSucursal" class="listo ds-color">Listo <i
                                            class="fas fa-thumbs-up"></i></p>
                                    <p id="no-listo-latitudSucursal" class="no-listo ds-color">No esta listo <i
                                            class="fas fa-thumbs-down"></i></p>
                                </div>
                            </div>

                            <!-- el pais donde se encuentra la sucursal -->
                            <div class="sel-pais">
                                <i class="fas fa-globe-americas emoji-form-registro-usuario"></i>
                                <select name="" id="paisSucursal" class="">
                                    <option value="" disabled selected>País</option>
                                </select>
                            </div>
                            <p id="listo-paisSucursal" class="listo ds-color">Listo <i class="fas fa-thumbs-up"></i></p>
                            <p id="no-listo-paisSucursal" class="no-listo ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>
                            <!-- fecha de fundacion de la sucursal -->
                            <div class="form-control ">
                                <div>
                                    <i class="fas fa-calendar-alt  emoji-form-registro-usuario"
                                        style="margin-top: 0px"></i>
                                </div>
                                <div style="display: flex; margin-left: 45px;">
                                    <div>
                                        <span>Fundación: </span>
                                    </div>
                                    <div class="inp-date">
                                        <input type="date" name="" id="fundacionSucursal">
                                    </div>
                                </div>
                            </div>
                            <p id="listo-fundacionSucursal" class="listoe ds-color">Listo <i
                                    class="fas fa-thumbs-up"></i></p>
                            <p id="no-listo-fundacionSucursal" class="no-listoe ds-color">No esta listo <i
                                    class="fas fa-thumbs-down"></i></p>


                            <button type="button" onclick="reseFru()" class="btn btn-outline-success bs-i-login"
                                data-dismiss="modal" data-toggle="modal" data-target="#registro-promocion">
                                REGISTRAR UNA PROMOCIÓN
                                <i class="fas fa-plus-circle"></i>
                            </button>
                            <button type="button" onclick="registrarSucursal()"
                                class="btn btn-outline-success bs-i-login">
                                ENVIAR
                                <i class="fas fa-share-square"></i>
                            </button>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                        CERRAR
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ventana modal de registro de promocion -->
    <div class="modal fade" id="registro-promocion" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <!-- header de la ventana modal -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-home"></i> REGISTRO PROMOCIÓN
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- body de la ventana modal -->
                <div class="modal-body ">
                    <div class="contenedor-de-modal-body">
                        <div class="col-12 avatar-login">
                            <img src="../../FrontedProyecto/img/logoamazon.jpg" alt="" srcset="">
                        </div>
                        <form action="" method="" id="formularioPromocion">
                            <!-- nombre de la promoción -->
                            <div class="registro-promociones">
                                <div class="instruccion">
                                    <span>Nombre de la promoción</span>
                                </div>
                                <input class="entrada" type="text" id="nombrePromocion">
                                <div id="listo-nombrePromocion" class="hecho ds-color">Hecho <i
                                        class="fas fa-thumbs-up"></i>
                                </div>
                                <div id="no-listo-nombrePromocion" class="no-hecho  ds-color">No está hecho <i
                                        class="fas fa-thumbs-down"></i></div>
                            </div>
                            <!-- codigo de la promoción -->
                            <div class="registro-promociones">
                                <div class="instruccion">
                                    <span>Codigo de la promoción</span>
                                </div>
                                <input class="entrada" type="number" name="" id="codigoPromocion">
                                <div id="listo-codigoPromocion" class="hecho ds-color">Hecho <i
                                        class="fas fa-thumbs-up"></i>
                                </div>
                                <div id="no-listo-codigoPromocion" class="no-hecho  ds-color">No está hecho <i
                                        class="fas fa-thumbs-down"></i></div>
                            </div>

                            <!-- descuento del precio real -->
                            <div class="registro-promociones">
                                <div class="instruccion"><span>Descuento</span></div>
                                <input class="entrada" type="text" name="" id="descuento">
                                <div id="listo-descuento" class="hecho ds-color">Hecho <i class="fas fa-thumbs-up"></i>
                                </div>
                                <div id="no-listo-descuento" class="no-hecho  ds-color">No está hecho <i
                                        class="fas fa-thumbs-down"></i></div>
                            </div>
                            <!-- descuento del precio con descuento -->
                            <div class="registro-promociones">
                                <div class="instruccion">
                                    <span>Precio final de la promoción</span>
                                </div>
                                <input class="entrada" type="number" name="" id="precioFinal">
                                <div id="listo-precioFinal" class="hecho ds-color">Hecho <i
                                        class="fas fa-thumbs-up"></i>
                                </div>
                                <div id="no-listo-precioFinal" class="no-hecho  ds-color">No está hecho <i
                                        class="fas fa-thumbs-down"></i></div>
                            </div>
                            <!-- sucursales disponibles de la promocion -->
                            <div class="registro-promociones">
                                <div class="instruccion">
                                    <span>Sucursales disponibles</span>
                                </div>
                                <div>
                                    <label class="instruccion">Sucursal1 <input class="entrada" type="checkbox" name=""
                                            id=""></label>
                                    <label class="instruccion">Sucursal2 <input class="entrada" type="checkbox" name=""
                                            id=""></label>
                                    <label class="instruccion">Sucursal3 <input class="entrada" type="checkbox" name=""
                                            id=""></label>
                                    <label class="instruccion">Sucursal4 <input class="entrada" type="checkbox" name=""
                                            id=""></label>
                                </div>
                                <div id="listo-sucursalesPromocion" class="hecho ds-color">Hecho <i
                                        class="fas fa-thumbs-up"></i>
                                </div>
                                <div id="no-listo-sucursalesPromocion" class="no-hecho  ds-color">No está hecho <i
                                        class="fas fa-thumbs-down"></i></div>
                            </div>

                            <!-- fecha de fundacion de la sucursal -->
                            <div class="registro-promociones ">
                                <div class="instruccion">
                                    <span>Fecha de inicio de la promoción</span>
                                </div>
                                <input class="entrada" type="date" name="" id="inicioPromocion">
                                <div id="listo-inicioPromocion" class="hecho ds-color">Hecho <i
                                        class="fas fa-thumbs-up"></i>
                                </div>
                                <div id="no-listo-inicioPromocion" class="no-hecho  ds-color">No está hecho <i
                                        class="fas fa-thumbs-down"></i></div>
                            </div>
                            <!-- fecha de finalización de la promoción  -->
                            <div class="registro-promociones ">
                                <div class="instruccion">
                                    <span>Fecha de finalización de la promoción</span>
                                </div>
                                <input class="entrada" type="date" name="" id="finPromocion">
                                <div id="listo-finPromocion" class="hecho ds-color">Hecho <i
                                        class="fas fa-thumbs-up"></i>
                                </div>
                                <div id="no-listo-finPromocion" class="no-hecho  ds-color">No está hecho <i
                                        class="fas fa-thumbs-down"></i></div>
                            </div>
                            <!-- fotos de la promoción -->
                            <div class="registro-promociones">
                                <div class="instruccion-fotos-promocion">
                                    <span>Fotos de la promoción</span>
                                </div>
                                <div>
                                    <div class="instruccion">
                                        <span>Foto de al Frente</span>
                                    </div>
                                    <input class="entrada" type="file" name="" id="fotoFrentePromocion">
                                    <div id="listo-fotoFrentePromocion" class="hecho ds-color">Hecho <i
                                            class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div id="no-listo-fotoFrentePromocion" class="no-hecho  ds-color">No está hecho <i
                                            class="fas fa-thumbs-down"></i></div>
                                </div>
                                <div>
                                    <div class="instruccion">
                                        <span>Foto costado Izquierdo</span>
                                    </div>
                                    <input class="entrada" type="file" name="" id="fotoIzquierdaPromocion">
                                    <div id="listo-fotoIzquierdaPromocion" class="hecho ds-color">Hecho <i
                                            class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div id="no-listo-fotoIzquierdaPromocion" class="no-hecho  ds-color">No está hecho
                                        <i class="fas fa-thumbs-down"></i></div>
                                </div>
                                <div>
                                    <div class="instruccion">
                                        <span>Foto costado Derecho</span>
                                    </div>
                                    <input class="entrada" type="file" name="" id="fotoDerechaPromocion">
                                    <div id="listo-fotoDerechaPromocion" class="hecho ds-color">Hecho <i
                                            class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div id="no-listo-fotoDerechaPromocion" class="no-hecho  ds-color">No está hecho <i
                                            class="fas fa-thumbs-down"></i></div>
                                </div>
                                <div>
                                    <div class="instruccion">
                                        <span>Foto de Atrás</span>
                                    </div>
                                    <input class="entrada" type="file" name="" id="fotoAtrasPromocion">
                                    <div id="listo-fotoAtrasPromocion" class="hecho ds-color">Hecho <i
                                            class="fas fa-thumbs-up"></i>
                                    </div>
                                    <div id="no-listo-fotoAtrasPromocion" class="no-hecho  ds-color">No está hecho <i
                                            class="fas fa-thumbs-down"></i></div>
                                </div>
                            </div>
                            <!-- botones de envió y registro producto -->
                            <button type="button" class="btn btn-outline-success bs-i-login" data-dismiss="modal"
                                data-toggle="modal" data-target="#registro-producto">
                                REGISTRAR UN PRODUCTO
                                <i class="fas fa-plus-circle"></i>
                            </button>
                            <button type="button" class="btn btn-outline-success bs-i-login">
                                ENVIAR
                                <i class="fas fa-share-square"></i>
                            </button>

                        </form>

                    </div>

                </div>
                <!-- footer de la ventana modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                        CERRAR
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Ventana modal de ver perfil de empresa-->

    <!-- ventana modal de la ficha para imprimir -->
    <!-- <div class="modal fade" id="fichaPromocional" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                body de la ventana modal 
                <div class="modal-body">
                    <div>
                        <div class="finame">
                            <span>Nombre del Promoción</span>
                        </div>

                        <div class="fiimg">
                            <img src="img/ani3.jpg" alt="">
                        </div>

                        <div class=" fides">
                            <span>Descuento: </span><span>40%</span>
                        </div>

                        <div class="fidat">
                            <div class="row">

                                <div class="col-6">
                                    <div class="fiida">
                                        <span>Precio Normal: </span><span>Lps.</span><span> 4500</span>
                                    </div>
                                    <div class="fiida">
                                        <span>Precio Oferta: </span><span>Lps.</span><span> 3500</span>
                                    </div>
                                    <div class="fiida">
                                        <span>Finaliza él: </span>25/08/2019</span>
                                    </div>
                                    <div class="fiida">
                                       <span>Sucursales Disponibles:</span>
                                       <ul>
                                           <li><span>Nombre Sucursal1</span></li>
                                           <li><span>Nombre Sucursal2</span></li>
                                           <li><span>Nombre Sucursal3</span></li>
                                           <li><span>Nombre Sucursal4</span></li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <span class="fiida">Más información:</span>
                                    <div class="qr">
                                        <img src="img/test.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                 footer de la ventana modal 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                            CERRAR
                            <i class="fas fa-window-close"></i>
                        </button>
                        <button type="button" class="btn btn-outline-success">
                            DESCARGAR
                            <i class="fas fa-download"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ventana modal de ver perfil de la empresa -->
    <div class="modal fade" id="ver-perfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-users"></i> PERFIL DE EMPRESA
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="contenedor-de-modal-body">

                        <div class="contenido-visualizaciones col-lg-11 col-md-11 col-sm-12">
                            <div class="pro text-center">
                                <div class="row">
                                    <div class="col-8 tit-perfil">
                                        <span>PERFIL</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-10 tit-nombre-usuario">
                                        <input type="text" value="Enoc Rivera Morales"
                                            placeholder="Nombre de de usuario" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-10 perfilImg">
                                        <img src="../../FrontedProyecto/img/ani2.jpg" alt="">
                                    </div>

                                </div>
                                <div class="col-10 datosPerfil">

                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            <span>DATOS DE LA EMPRESA</span>
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            <span>DATOS DE LA EMPRESA</span>
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" value="23/45/2027" placeholder="Fecha de nacimiento"
                                                readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- boton de regresar a registrarse como usuario -->
                        <button type="button" class="btn btn-outline-success bs-i-login" data-dismiss="modal"
                            data-toggle="modal" data-target="#actualizar-perfil">
                            ACTUALIZAR PERFIL
                            <i class="fas fa-users"></i>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- boton de cerrar la ventana modal -->
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                        CERRAR
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Ventana modal de Actualizar Perfil-->
    <div class="modal fade" id="actualizar-perfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-users"></i> ACTUALIZAR EL
                        PERFIL DE EMPRESA
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="contenedor-de-modal-body">

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
                                        <input type="text" value="Enoc Rivera Morales"
                                            placeholder="Nombre de de usuario">
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
                                            <span>DATOS DE LA EMPRESA</span>
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa">
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            <span>DATOS DE LA EMPRESA</span>
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa">
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa">
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa">
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa">
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa">
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
                                        </div>
                                        <div class="col-md-6 col-sm-12 datoEdit">
                                            <input type="text" placeholder="respuesta de los datos de la empresa">
                                        </div>
                                    </div>
                                    <div class="row perfilUsuario">
                                        <div class="col-md-6 col-sm-12 datoDefault">
                                            DATOS DE LA EMPRESA
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
                        <!-- boton de regresar a registrarse como usuario -->
                        <button type="button" class="btn btn-outline-success bs-i-login" data-dismiss="modal"
                            data-toggle="modal" data-target="#ver-perfil">
                            VER PERFIL
                            <i class="fas fa-users"></i>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- boton de cerrar la ventana modal -->
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">
                        CERRAR
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal de verificación de cerrar seccion o salir -->
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
    <!-- footer de la pagina -->
    <div class="">
        <footer>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </footer>
    </div>
    <script src="../../FrontedProyecto/js/all.min.js"></script>
    <script src="../../FrontedProyecto/js/jquery-3.4.1.min.js"></script>
    <script src="../../FrontedProyecto/js/bootstrap.min.js"></script>
    <script src="../../FrontedProyecto/js/core.js"></script>
    <script src="../../FrontedProyecto/js/charts.js"></script>
    <script src="../../FrontedProyecto/js/animated.js"></script>
    <script src="../../FrontedProyecto/js/grafico-seguidores.js"></script>
    <script src="../../FrontedProyecto/js/grafico-venta-por-dia.js"></script>
</body>

</html>