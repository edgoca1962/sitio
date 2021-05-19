<?php
class InicioModelo extends BaseLibreria
{
   private $vista;
   private $palabrasClave;
   private $descripcion;
   private $titulo;
   private $consultas;
   private $datos_consulta;

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
      $this->titulo = "Inicio";
      $this->descripcion = "Este es un sitio para la administración de contenidos.";
      $this->palabrasClave = "CMS,Administración,Contenido,Management,Content";
      return true;
   }
}
