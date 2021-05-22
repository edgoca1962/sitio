<?php

declare(strict_types=1);
class Inicio extends InicioModelo
{
   private string $vista;
   private string $descripcion;
   private string $palabrasClave;
   private string $titulo;
   private array $carrusel;

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
   public function getElementos(): bool
   {
      if ($this->getElementosModelo()) {
         $this->descripcion = $this->getAtributoModelo("descripcion");
         $this->palabrasClave = $this->getAtributoModelo("palabrasClave");
         $this->titulo = $this->getAtributoModelo("titulo");
         $this->carrusel = $this->getAtributoModelo("carrusel");
         return true;
      } else {
         return false;
      }
   }
}
