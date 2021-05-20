<?php
class Plantilla extends PlantillaModelo
{
   private $vista;
   private $titulo;
   private $logo;
   private $icono;
   private $rutaDominio;
   private $rutaContenidos;
   private $rutaCss;
   private $rutaJs;
   private $rutaImgBanners;
   private $rutaImgGenerales;
   private $rutaImgUsrs;
   private $rutaPlugins;

   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
      $this->getElementos();
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
   public function getElementos()
   {
      if ($this->getElementosModelo()) {
         $this->titulo = $this->getAtributoModelo("titulo");
         $this->logo = $this->getAtributoModelo("logo");
         $this->icono = $this->getAtributoModelo("icono");
         return true;
      } else {
         return false;
      }
   }
}
