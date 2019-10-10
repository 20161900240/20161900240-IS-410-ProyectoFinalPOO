<?php
    class Empresas{
        private $nombreEmpresa;
        private $correoEmpresa;
        private $verificacionCorreoEmpresa;
        private $idEmpresa;
        private $telefonoEmpresa;
        private $paginaWebEmpresa;
        private $facebookEmpresa;
        private $twitterEmpresa;  
        private $contrasenaEmpresa;
        private $longitudEmpresa;
        private $latitudEmpresa;
        private $paisEmpresa;
        private $fundacionEmpresa;
        private $urlBanner;
        private $urlLogo;
        private $sucursales=array('Sucursal1'=>array(
                                'nombre'=>'mi sucursal',
                                'longitudSucursal'=>'123',
                                'latitudSucursal'=>'456',
                                'telefonoSucursal'=>'98707307',
                                'codigoSucursal'=>'256554',
                                'paisSucursal'=>'MEXICO',
                                'fundacionSucursal'=>'10/8/19'
                                ),
                                'Sucursal1'=>array(
                                'nombre'=>'mi sucursal',
                                'longitudSucursal'=>'123',
                                'latitudSucursal'=>'456',
                                'telefonoSucursal'=>'98707307',
                                'codigoSucursal'=>'256554',
                                'paisSucursal'=>'MEXICO',
                                'fundacionSucursal'=>'10/8/19'
                                    )
                                );

        private $productos=array('Producto1'=>array(
                                'nombreProducto'=>'queso con gusanos',
                                'codigoProducto'=>'128545',
                                'fechaElaboracion'=>'12/3/5',
                                'fechaVencimiento'=>'10/3/4',
                                'precio'=>'420',
                                'urlFotoFrente'=>'img/gfgf/fgf',
                                'urlFotoAtras'=>'img/gfgf/fgf',
                                'urlFotoIzquierdo'=>'img/gfgf/fgf',
                                'urlFotoDerecho'=>'img/gfgf/fgf',
                                'descripcion'=>'Este es un producto tatata',
                                'sucursalesDisponibles'=>array(
                                    'Sucursal1'=>array(
                                        'nombreSursal'=>'Sucursal1'
                                    ),
                                    'Sucursal2'=>array(
                                        'nombreSursal'=>'Sucursal2'
                                    )
                                    )
                                )
                                );
        private $promociones = array(
                                'nombrePromocion'=>'promoción Unitec',
                                'codigoPromocion'=>'165316546',
                                'fechaInicioPromocion'=>'17/4/12',
                                'fechaVencimientoPromocion'=>'10/4/4',
                                'precioFinalPromocion'=>'500',
                                'porcentajeDescuento'=>'15%',
                                'sucursalesDisponibles'=>array(
                                    'sucarsal1'=>array(
                                        'nombreSucursal1'=>'Unitec Comayagua',
                                    ),
                                    'sucarsal2'=>array(
                                        'nombreSucursal2'=>'Unitect sanpiter',
                                    ),
                                   
                                ),
                                'comentarios'=>array(
                                    'comentario1'=>array(
                                        'usuarioComento'=>'lol',
                                        'comentario'=>'lol a comentado',
                                    ),
                                    'comentario2'=>array(
                                        'usuarioComento'=>'pep',
                                        'comentario'=>'pep a comentado',
                                    ),
                                    'comentario3'=>array(
                                        'usuarioComento'=>'misifu',
                                        'comentario'=>'misifu a comentado',
                                    ),

                                ),
                                'evaluaciones'=>array(
                                    'valor1'=>'4',
                                    'valor2'=>'7',                                
                                ),
                                'descripcionPromocion'=>'Este es un producto unah',
                                'urlFotoFrente'=>'img/prod1.jpg',
                                'urlFotoAtras'=>'img/prod2.jpg',
                                'urlFotoIzquierdo'=>'img/prod3.jpg',
                                'urlFotoDerecho'=>'img/prod4.jpg',
                                );
        
       

        public function __construct(
            $nombreEmpresa,
            $correoEmpresa,
            $idEmpresa,
            $telefonoEmpresa,
            $paginaWebEmpresa,
            $facebookEmpresa,
            $twitterEmpresa,
            $contrasenaEmpresa,
            $longitudEmpresa,
            $latitudEmpresa,
            $paisEmpresa,
            $fundacionEmpresa,
            $urlBanner,
            $urlLogo
           
        ){
        $this->nombreEmpresa=$nombreEmpresa;
        $this->correoEmpresa=$correoEmpresa;
        $this->idEmpresa=$idEmpresa;
        $this->telefonoEmpresa=$telefonoEmpresa;
        $this->paginaWebEmpresa=$paginaWebEmpresa;
        $this->facebookEmpresa=$facebookEmpresa;
        $this->twitterEmpresa=$twitterEmpresa;
        $this->contrasenaEmpresa=$contrasenaEmpresa;
        $this->longitudEmpresa=$longitudEmpresa;
        $this->latitudEmpresa=$latitudEmpresa;  
        $this->paisEmpresa=$paisEmpresa;
        $this->fundacionEmpresa=$fundacionEmpresa;
        $this->urlBanner=$urlBanner;
        $this->urlLogo=$urlLogo;
        
        }

        public function setNombreEmpresa($nombreEmpresa){
        $this->nombreEmpresa=$nombreEmpresa;
        }
        public function getNombreEmpresa(){
        return $this->nombreEmpresa;
        }

        public function setCorreoEmpresa($correoEmpresa){
        $this->correoEmpresa=$correoEmpresa;
        }
        public function getCorreoEmpresa(){
        return $this->correoEmpresa;
        }

        public function setIdEmpresa($idEmpresa){
        $this->idEmpresa=$idEmpresa;
        }
        public function getIdEmpresa(){
        return $this->idEmpresa;
        }
        
        public function setTelefonoEmpresa($telefonoEmpresa){
        $this->telefonoEmpresa=$telefonoEmpresa;
        }
        public function getTelefonoEmpresa(){
        return $this->telefonoEmpresa;
        }
        
        public function setPaginaWebEmpresa($paginaWebEmpresa){
        $this->paginaWebEmpresa=$paginaWebEmpresa;
        }
        public function getPaginaWebEmpresa(){
        return $this->paginaWebEmpresa;
        }
        
        public function setFacebookEmpresa($facebookEmpresa){
        $this->facebookEmpresa=$facebookEmpresa;
        }
        public function getFacebookEmpresa(){
        return $this->facebookEmpresa;
        }
        
        public function setTwitterEmpresa($twitterEmpresa){
        $this->twitterEmpresa=$twitterEmpresa;
        }
        public function getTwitterEmpresa(){
        return $this->twitterEmpresa;
        }
        
        public function setContrasenaEmpresa(){
            $this->contrasenaEmpresa=$contrasenaEmpresa;
        }
        public function getContrasenaEmpresa($contrasenaEmpresa){
            return $this->$contrasenaEmpresa;
        }
        public function setPaisEmpresa(){
            $this->paisEmpresa=$paisEmpresa;
        }
        public function getPaisEmpresa($paisEmpresa){
            return $this->$paisEmpresa;
        }

        public function setLongitudEmpresa(){
            $this->longitudEmpresa= $longitudEmpresa;
        }
        public function getLongitudEmpresa($longitudEmpresa){
            return $this->longitudEmpresa;
        }

         public function setLatitudEmpresa(){
            $this->latitudEmpresa= $latitudEmpresa;
        }
        public function getLatitudEmpresa($latitudEmpresa){
            return $this->latitudEmpresa;
        }

         public function setFundacionEmpresa(){
            $this->fundacionEmpresa= $fundacionEmpresa;
        }
        public function getFundacionEmpresa($fundacionEmpresa){
            return $this->fundacionEmpresa;
        }

        public function setUrlBanner(){
            $this->urlBanner= $urlBanner;
        }
        public function getUrlBanner($urlBanner){
            return $this->urlBanner;
        }

         public function setUrlLogo(){
            $this->urlLogo= $urlLogo;
        }
        public function getUrlLogo($urlLogo){
            return $this->urlLogo;
        }


        public function __toString(){
            return json_encode($this->getDatosEmpresas());
        }
        
        public function crearEmpresa($referenciaBD){
            $empresa = $this->getDatosEmpresas();
            $resultado  = $referenciaBD->getReference('empresas')
                ->push($empresa);
            if($resultado->getKey() != null){
                return '{"mensaje":"empresa creada","key":"'.$resultado->getKey().'"}';
            }else {
                return '{"mensaje":"empresa no creada"}';
            }
        }

        public function actulizarEmpresa($referenciaBD,$id){
            $resultado = $referenciaBD ->getReference('empresas')
                ->getChild($id)
                ->set($this->getDatosEmpresas());
              if($resultado->getKey() != null){
                return '{"mensaje":"datos empresa actualizados","key":"'.$resultado->getKey().'"}';
            }else {
                return '{"mensaje":"datos empresa no actualizado"}';
            }
        }

        public static function obtenerEmpresas($referenciaBD){
            $resultado= $referenciaBD ->getReference('empresas')
                ->getSnapshot()
                ->getValue();
            echo json_encode($resultado);
        }


        public function getDatosEmpresas(){
            $empresa['nombreEmpresa'] =$this->nombreEmpresa;
            $empresa['correoEmpresa'] =$this->correoEmpresa;
            $empresa['idEmpresa'] =$this->idEmpresa;
            $empresa['telefonoEmpresa'] =$this->telefonoEmpresa;
            $empresa['paginaWebEmpresa'] =$this->paginaWebEmpresa;
            $empresa['facebookEmpresa'] =$this->facebookEmpresa;
            $empresa['twitterEmpresa'] =$this->twitterEmpresa;
            $empresa['contrasenaEmpresa'] =$this->contrasenaEmpresa;
            $empresa['longitudEmpresa'] =$this->longitudEmpresa;
            $empresa['latitudEmpresa'] =$this->latitudEmpresa;
            $empresa['paisEmpresa'] =$this->paisEmpresa;
            $empresa['fundacionEmpresa'] =$this->fundacionEmpresa;
            $empresa['urlBanner'] =$this->urlBanner;
            $empresa['urlLogo'] =$this->urlLogo;
            $empresa['sucursales'] =$this->sucursales;
            $empresa['productos'] =$this->productos;
            $empresa['promociones'] =$this->promociones;
            $empresa['verificacionCorreoEmpresa']=$this->verificacionCorreoEmpresa;
            return $empresa;
        }
    }

?>