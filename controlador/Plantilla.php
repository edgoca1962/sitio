<?php
class Plantilla extends PlantillaModelo
{
   private $rutas_proyecto;
   private $datos_rutas_proyecto;
   private $titulo;
   private $logo;
   private $icono;
   private $rutas;
   private $ruta_dominio;
   private $ruta_contenidos;
   private $ruta_css;
   private $ruta_js;
   private $ruta_img_banners;
   private $ruta_img_generales;
   private $ruta_img_usrs;
   private $ruta_js_plugins;
   private $elementos;
   private $datos_elementos;
   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
   }
   public function inicio($parametros = null)
   {
   }
   public function getAtributo($atributo)
   {
      return $this->$atributo;
   }
   public function setAtributo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
}
