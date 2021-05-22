<?php

declare(strict_types=1);
class Plantilla extends PlantillaModelo
{
   private string $vista;
   private string $titulo;
   private string $logo;
   private string $icono;
   private string $rutaDominio;
   private string $rutaContenidos;
   private string $rutaCss;
   private string $rutaJs;
   private string $rutaImgBanners;
   private string $rutaImgGenerales;
   private string $rutaImgUsrs;
   private string $rutaPlugins;

   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
      $this->getElementos();
      $this->getRutas();
   }
   public function getAtributo($atributo)
   {
      return $this->$atributo;
   }
   public function setAtributo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   public function getElementos(): bool
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
   public function getRutas(): bool
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
}
