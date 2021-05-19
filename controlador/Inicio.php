<?php
class Inicio extends InicioModelo
{
   private $id_sesion;
   private $nombre_usuario;
   private $foto_usuario;
   private $palabrasClave;
   private $descripcion;
   private $titulo;
   private $sesion;
   private $vista;

   public function __construct()
   {
      parent::__construct();
      $this->vista = get_class($this) . ".php";
   }
   public function inicio($parametros = null)
   {
      if ($this->getElementos()) {
         return true;
      } else {
         return false;
      }
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
         $this->titulo = $this->getAtributoModelo("Inicio");
         $this->descripcion = $this->getAtributoModelo("descripcion");
         $this->palabrasClave = $this->getAtributoModelo("palabrasClave");
         return true;
      } else {
         return false;
      }
   }
}
