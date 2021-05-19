<?php
class InicioModelo extends BaseLibreria
{
   private $descripcion;
   private $palabrasClave;
   private $titulo;

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
   protected function getElementosModelo()
   {
      $this->descripcion = "Esta es la descripción de la página de inicio";
      $this->palabrasClave = "sitio,CMS,Content,Management,System,Sistema,Administración,Contenido";
      $this->titulo = " | " . "Inicio";
      return true;
   }
}
