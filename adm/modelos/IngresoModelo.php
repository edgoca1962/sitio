<?php
class IngresoModelo extends BaseLibreria
{

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
   protected function get_datos_modelo()
   {
   }
}
