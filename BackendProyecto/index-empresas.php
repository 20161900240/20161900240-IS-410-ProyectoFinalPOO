<?php
    header('Content-Type: aplication/json');
    include_once('clases/clase-empresas.php');
    require_once('clases/clase-base-datos.php');
    $referenciaBD = new BaseDeDatos();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $empresa = new Empresas(
                            $_POST['nombreEmpresa'],
                            $_POST['correoEmpresa'],
                            $_POST['idEmpresa'],
                            $_POST['telefonoEmpresa'],
                            $_POST['paginaWebEmpresa'],
                            $_POST['facebookEmpresa'],
                            $_POST['twitterEmpresa'],
                            $_POST['contrasenaEmpresa'],
                            $_POST['longitudEmpresa'],
                            $_POST['latitudEmpresa'],
                            $_POST['paisEmpresa'],
                            $_POST['fundacionEmpresa'],
                            $_POST['urlBanner'],
                            $_POST['urlLogo']
                            );
        echo $empresa->crearEmpresa($referenciaBD->getBD());
    } 

    if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['id'])) {
        $_PUT = array();
       if ($_SERVER['REQUEST_METHOD'] == 'PUT') 
           parse_str(file_get_contents("php://input"), $_PUT);
            $empresa = new Empresas(
                            $_PUT['nombreEmpresa'],
                            $_PUT['correoEmpresa'],
                            $_PUT['idEmpresa'],
                            $_PUT['telefonoEmpresa'],
                            $_PUT['paginaWebEmpresa'],
                            $_PUT['facebookEmpresa'],
                            $_PUT['twitterEmpresa'],
                            $_PUT['contrasenaEmpresa'],
                            $_PUT['longitudEmpresa'],
                            $_PUT['latitudEmpresa'],
                            $_PUT['paisEmpresa'],
                            $_PUT['fundacionEmpresa'],
                            $_PUT['urlBanner'],
                            $_PUT['urlLogo']
                            );
     echo $empresa->actulizarEmpresa($referenciaBD->getBD(),$_GET['id']);
    } 

     if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
      Empresas::obtenerEmpresas($referenciaBD->getBD());
      
    } 

    
?>