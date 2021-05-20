<?php
class Inicio extends InicioModelo
{
   private $vista;
   private $descripcion;
   private $palabrasClave;
   private $titulo;

   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
   }
   public function inicio($parametros = null)
   {
      $this->getElementos();
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
         $this->descripcion = $this->getAtributoModelo("descripcion");
         $this->palabrasClave = $this->getAtributoModelo("palabrasClave");
         $this->titulo = $this->getAtributoModelo("titulo");
         return true;
      } else {
         return false;
      }
   }
}
