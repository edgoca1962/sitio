<?php
class Plantilla extends PlantillaModelo
{
   private $logo;
   private $icono;
   private $titulo;
   private $descripcion;
   private $palabrasClave;
   private $rutaDominio;
   private $rutaContenidos;
   private $rutaCss;
   private $rutaJs;
   private $rutaImgBanners;
   private $rutaImgGenerales;
   private $rutaImgUsrs;
   private $rutaPlugins;
   private $mensaje;
   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
   }
   public function inicio($parametros = null)
   {
      if ($this->getRutas()) {
         if ($this->getElementos()) {
            # code...
         } else {
            $this->mensaje = "No se obtubieron los elementos de la página.";
         }
      } else {
         $this->mensaje = "No se obtubieron las rutas del proyecto";
      }
      $this->setAtributoLibreria("tipoScript", "simple");
      $this->titulo = $this->setAtributoLibreria("titulo", "Error");
      $this->texto = $this->setAtributoLibreria("texto", $this->mensaje);
      $this->tipoAlerta = $this->setAtributoLibreria("tipoAlerta", "Error");
      $this->getAlerta();
   }
   public function getAtributo($atributo)
   {
      return $this->$atributo;
   }
   public function setAtributo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   public function getRutas()
   {
      if ($this->getRutasModelo()) {
         $this->rutaDominio = $this->getAtributoModelo("rutaDominio");
         $this->rutaContenidos = $this->getAtributoModelo("rutaContenidos");
         $this->rutaCss = $this->getAtributoModelo("rutaCss");
         $this->rutaJs = $this->getAtributoModelo("rutaJs");
         $this->rutaImgBanners = $this->getAtributoModelo("rutaImgBanners");
         $this->rutaImgGenerales = $this->getAtributoModelo("rutaImgGenerales");
         $this->rutaImgUsrs = $this->getAtributoModelo("rutaImgUsrs");
         $this->rutaPlugins = $this->getAtributoModelo("rutaPlugins");
         return true;
      } else {
         return false;
      }
   }
   public function getElementos()
   {
      if ($this->getElementosModelo()) {
         $this->icono = $this->getAtributoModelo("icono");
         $this->logo = $this->getAtributoModelo("logo");
         $this->titulo = $this->getAtributoModelo("titulo");
         $this->descripcion = $this->getAtributoModelo("descripcion");
         $this->palabrasClave = $this->getAtributoModelo("palabrasClave");
         return true;
      } else {
         return false;
      }
   }
}
