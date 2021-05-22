<?php

declare(strict_types=1);
class InicioModelo extends BaseLibreria
{
   private string $descripcion;
   private string $palabrasClave;
   private string $titulo;
   private array $carrusel;

   protected function __construct()
   {
   }
   protected function getAtributoModelo($atributo)
   {
      return $this->$atributo;
   }
   protected function setAtributoModelo($atributo, $valor)
   {
      $this->$atributo = $valor;
   }
   protected function getElementosModelo(): bool
   {
      $this->descripcion = "Esta es la descripción de la página de inicio";
      $this->palabrasClave = "sitio,CMS,Content,Management,System,Sistema,Administración,Contenido";
      $this->titulo = " | " . "Inicio";
      $this->carrusel = [
         "banner_0428.jpeg",
         "banner_0429.jpeg",
         "banner_0430.jpeg"
      ];
      return true;
   }
}
